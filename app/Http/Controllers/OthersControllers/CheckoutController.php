<?php

namespace App\Http\Controllers\OthersControllers;


use App\Modules\FlightReservation\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Requests\CheckoutRequest;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use App\Modules\Others\Sell;
use App\Modules\FlightReservation\FlightSellDetail;
use App\Modules\VehicleReservation\VehicleReservation;
use App\Modules\HousingReservation\HotelReservation;
use App\Modules\Others\InsuranceReservation;
use Auth;
use App\User;
use Session;
/* Random String */
use Illuminate\Support\Str;
/* PDF */
use PDF;
/* Mail */
use Mail;
use App\Modules\Mail\ConfirmationMail;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modules.cart.checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function getPdf($venta)
    {
        $pdfname = $venta->source . '.pdf';
        return PDF::loadView('modules.others.pdf.billing', compact('venta'))->save(storage_path('app/public/public/pdf/' . $pdfname));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request)
    {
        try {
            $charge = Stripe::charges()->create([
                'amount' => Cart::total(),
                'currency' => 'CAD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    //change to Order ID after we start using DB
                    //'contents' => $contents,
                    //'quantity' => Cart::instance('default')->count(),
                    //'discount' => collect(session()->get('coupon'))->toJson(),
                ],
            ]); 
            // SUCCESSFUL
            /* Actualizar datos del usuario */
            $user = User::find($request->user_id);
            $user->address = $request->address;
            $user->city = $request->city;
            $user->province = $request->province;
            $user->postalcode = $request->postalcode;
            $user->phone = $request->phone;
            $user->name_on_card = $request->name_on_card;
            $user->save();
            /* Ingresar la venta */
            $this->addSell($request, null);
            /** Vaciar el carrito si la compra ha sido exitosa */
            Cart::instance('default')->destroy();
            return redirect('/');
            // return redirect()->route('confirmation.index')->with('success_message', 'Gracias por preferirnos! Su compra ha sido realizada');
            /* Cart::instance('default')->destroy();
            session()->forget('coupon');*/

            //return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
        } catch (CardErrorException $e) {
            $this->addSell($request, $e->getMessage());
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }

    public function addSell($request, $error){

        $venta = Sell::create([
            'source' => Str::random(16),
            'user_id' => Auth::user()->id,
            'impuesto' => Cart::tax(),
            'monto_total'  => Cart::total(),
            'user_email' => $request->email,
            'user_name' => $request->name,
            'tipo_comprobante' => 'Factura',
            'metodo_pago' => 'Credito',
            'descuento' => '2000',
            'error' => $error
        ]);
        /** Ingresar el detalle de la venta iterando el carrito*/
        foreach (Cart::content() as $item)
        {
            if(get_class($item->model) == "App\Modules\FlightReservation\Flight")
            {
                $cabina = $item->model->tipoCabina($item->subtotal/$item->qty);
                FlightSellDetail::create([
                    'sell_id' => $venta->id,
                    'flight_id' => $item->model->id,
                    'roundtrip_id' => null,
                    'precio' => strval($item->subtotal),
                    'descuento' => '200',
                    'tipo' => $cabina,
                    'cantidad' => $item->qty,
                    'monto_total' => strval($item->total),
                ]);
                //dump($cabina);
                //dump($item->qty);
                $vuelo = Flight::findOrFail($item->model->id);
                $vuelo->descontarAsientos($cabina, $item->qty);



            }
            else if(get_class($item->model) == "App\Modules\VehicleReservation\Vehicle")
            {                
                VehicleReservation::create([
                    'sell_id' => $venta->id,
                    'vehicle_id' => $item->model->id,
                    'monto_total' => strval($item->total),
                ]);
            }
            else if(get_class($item->model) == "App\Modules\Others\Insurance")
            {
                InsuranceReservation::create([
                    'sell_id' => $venta->id,
                    'insurance_id' => $item->model->id,
                    'monto_total' => strval($item->total),
                ]);
            }
            else if(get_class($item->model) == "App\Modules\HousingReservation\HotelRoom")
            {
                $params = request()->session()->get('busqueda.room' . $item->model->id);
                //dd($params);
                HotelReservation::create([
                    'sell_id' => $venta->id,
		            'hotel_room_id' => $item->model->id,
                    'precio' => strval($item->total),
                    'fecha_ingreso' => $params['fecha-entrada-housing'],
                    'fecha_egreso' => $params['fecha-salida-housing'],
                    'cantidad' => $item->qty,
                    'monto_total' => strval($item->total),
                    'descuento' => 100,
                ]);
            }
            else if(get_class($item->model) == "App\Modules\FlightReservation\RoundtripFlight")
            {
                //dd("hola");
                $cabina = $item->model->tipoCabina($item->subtotal/$item->qty);
                FlightSellDetail::create([
                    'sell_id' => $venta->id,
                    'flight_id' => null,
                    'roundtrip_id' => $item->model->id,
                    'precio' => strval($item->subtotal),
                    'descuento' => '200',
                    'tipo' => $cabina,
                    'cantidad' => $item->qty,
                    'monto_total' => strval($item->total),
                ]);
                //dump($cabina);
                //dump($item->qty);
                $vueloIda = Flight::findOrFail($item->model->vueloIda->id);
                $vueloVuelta = Flight::findOrFail($item->model->vueloVuelta->id);
                $vueloIda->descontarAsientos($cabina, $item->qty);
                $vueloVuelta->descontarAsientos($cabina, $item->qty);
            }
        }
        /* PDF y Email */
        // $this->getPdf($venta);
        // $pdfpath = public_path('storage/public/pdf/' . $venta->source . '.pdf');
        // $email = $request->email;
        // $username = $request->name;
        // $data = array('venta'=>$venta);
        // $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        // $beautymail->send('modules.others.mail.confirmationMail', $data, function($message)
        // use ($email, $username, $pdfpath)
        // {
        //     $message
            
        //         ->to($email, $username)
        //         ->subject('Confirmación de reserva exitosa')
        //         ->attach($pdfpath);
        // }); 
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
