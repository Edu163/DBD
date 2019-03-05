<?php

namespace App\Http\Controllers\OthersControllers;

use App\Modules\FlightReservation\FlightC;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\FlightReservation\FlightDetail;
use App\Modules\VehicleReservation\Vehicle;
use App\Modules\HousingReservation\HotelRoom;
use App\Modules\Others\Insurance;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mightAlsoLike = FlightDetail::inRandomOrder()->take(4)->get();

        return view('modules.cart.cart')->with('mightAlsoLike', $mightAlsoLike);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Modules\FlightReservation\FlightDetail  $flightDetail
     * @return \Illuminate\Http\Response
     */
    public function storeFlights(FlightC $flight)
    {
        // $duplicates = Cart::search(function ($cartItem, $rowId) use ($flightDetail) {
        //     return $cartItem->id === $flightDetail->id;
        // });
        // if ($duplicates->isNotEmpty()) {
        //     return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart!');
        // }
        Cart::add($flight->id, 'destino-santiago', 1, $flight->getPrecio())
            ->associate('App\Modules\FlightReservation\FlightC');

         return redirect()->route('cart.index')->with('success_message', 'Se ha añadido a tu carrito!');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Modules\VehicleReservation\Vehicle $vehicle
     * @return \Illuminate\Http\Response
     */
    public function storeVehicle(Vehicle $vehicle)
    {
        // $duplicates = Cart::search(function ($cartItem, $rowId) use ($vehicle) {
        //     return $cartItem->id === $vehicle->id;
        // });
        // if ($duplicates->isNotEmpty()) {
        //     return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart!');
        // }
        $params = request()->session()->get('busqueda.vehicles');
        $id = $vehicle->id;
        request()->session()->put('busqueda.vehicle' . $id, $params);

        Cart::add($vehicle->id, 'destino-santiago', 1, $vehicle->precio)
            ->associate('App\Modules\VehicleReservation\Vehicle');

         return redirect()->route('cart.index')->with('success_message', 'Se ha añadido a tu carrito!');
    }

    public function storeRoom(HotelRoom $hab)
    {
        $params = request()->session()->get('busqueda.hotels');
        $id = $hab->id;
        request()->session()->put('busqueda.room' . $id, $params);
        //$params2 = request()->session()->get('busqueda.room' . $id);
        //dd($params2);
        Cart::add($hab->id, 'destino-santiago', 1, $hab->precio)
            ->associate('App\Modules\HousingReservation\HotelRoom');

         return redirect()->route('cart.index')->with('success_message', 'Se ha añadido a tu carrito!');
    }

    public function storeInsurance(Insurance $insurance)
    {
        Cart::add($insurance->id, 'destino-santiago', 1, $insurance->price)
            ->associate('App\Modules\Others\Insurance');

         return redirect()->route('cart.index')->with('success_message', 'Se ha añadido a tu carrito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validator = Validator::make($request->all(), [
        //     'quantity' => 'required|numeric|between:1,5'
        // ]);

        // if ($validator->fails()) {
        //     session()->flash('errors', collect(['Quantity must be between 1 and 5.']));
        //     return response()->json(['success' => false], 400);
        // }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'La cantidad ha sido añadida existosamente!');
        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success_message', '¡El item fue eliminado satisfactoriamente!');
    }
}
