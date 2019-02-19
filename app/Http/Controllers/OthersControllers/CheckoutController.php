<?php

namespace App\Http\Controllers\OthersControllers;


use Illuminate\Http\Request;
use App\Http\Requests\CheckoutRequest;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use App\Modules\Others\Sell;
use App\Modules\FlightReservation\FlightSellDetail;
use Auth;
use App\User;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkout');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request)
    {
        //
        //dd($request->all());
        /*$contents = Cart::content()->map(function ($item) {
            return $item->model->slug.', '.$item->qty;
        })->values()->toJson();*/

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
            /** En esta area ingresar los detalles a las demás tablas*/   
            /** Ingresar la venta */
            $venta = new Sell();
            //$venta->user_id = $this->Session->read('Auth.User.id');
            $venta->user_id = Auth::user()->id;
            $venta->impuesto = Cart::tax();
            $venta->monto_total  = Cart::total();
            $venta->tipo_comprobante = 'Factura';
            $venta->metodo_pago = 'Credito';
            $venta->descuento = '2000';
            $venta->save();
            /** Ingresar el detalle de la venta iterando el carrito*/
            foreach (Cart::content() as $item)
            {
                /** faltan los if para cada tipo de item */
                $dv_vuelo = new FlightSellDetail();
                $dv_vuelo->sell_id = $venta->id;
                $dv_vuelo->precio = strval($item->model->precio);
                $dv_vuelo->descuento = '200';
                $dv_vuelo->tipo = 'Economy';
                $dv_vuelo->cantidad = $item->qty;
                $dv_vuelo->monto_total = strval($item->total);
                $dv_vuelo->save();
            }
            /** Vaciar el carrito si la compra ha sido exitosa */
            Cart::instance('default')->destroy();
            return redirect()->route('confirmation.index')->with('success_message', 'Gracias por preferirnos! Su compra ha sido realizada');
            // SUCCESSFUL
            /* Cart::instance('default')->destroy();
            session()->forget('coupon');*/

            //return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
        } catch (CardErrorException $e) {
            return back()->withErrors('Error! ' . $e->getMessage());
        }
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
