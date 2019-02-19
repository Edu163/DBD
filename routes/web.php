<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();


Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/cart', 'OthersControllers\CartController@index')->name('cart.index');
Route::patch('/cart/{product}', 'OthersControllers\CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'OthersControllers\CartController@destroy')->name('cart.destroy');
Route::post('/cart', 'OthersControllers\CartController@storeFlights')->name('cart.storeFlights');
// Route::post('/cart', 'CartController@storeVehicle')->name('cart.storeVehicle');
// Route::post('/cart', 'CartController@storeHousing')->name('cart.storeHousing');
Route::group(['middleware' => ['auth', 'admin']], function() {

    Route::get('/admin', 'AdminController@index')->name('admin');


    /* Vehiculos */
    Route::resources([
        '/admin/service_and_provider'         => 'VehicleReservationControllers\ServiceAndProviderController',
        '/admin/vehicle_service'              => 'VehicleReservationControllers\VehicleServiceController',
        '/admin/vehicle_calendary'            => 'VehicleReservationControllers\VehicleCalendaryController',
        '/admin/vehicle'                      => 'VehicleReservationControllers\VehicleController',
        '/admin/vehicle_provider'             => 'VehicleReservationControllers\VehicleProviderController',
        '/admin/vehicle_reservation'          => 'VehicleReservationControllers\VehicleReservationController',
        '/admin/vehicle_reservation_detail'   => 'VehicleReservationControllers\VehicleReservationDetailController',
        '/admin/vehicle_service'              => 'VehicleReservationControllers\VehicleServiceController',
        '/admin/zone'                         => 'VehicleReservationControllers\ZoneController',
    ]);

    /* Vuelos */
    Route::resources([
        '/admin/airport'                      => 'FlightReservationControllers\AirportController',
        '/admin/checkin'                      => 'FlightReservationControllers\CheckInController',
        '/admin/company'                      => 'FlightReservationControllers\CompanyController',
        '/admin/flight'                       => 'FlightReservationControllers\FlightController',
        '/admin/flight_detail'                => 'FlightReservationControllers\FlightDetailController',
        '/admin/flight_reservation'           => 'FlightReservationControllers\FlightReservationController',
        '/admin/flight_sell_detail'           => 'FlightReservationControllers\FlightSellDetailController',
        '/admin/origin_destiny'               => 'FlightReservationControllers\OrigenDestinoController',
        '/admin/seat'                         => 'FlightReservationControllers\AsientoController',
        // '/admin/aviones'                       => 'FlightReservationControllers\AvionController',     
    ]);

    /* Alojamiento */
    Route::resources([
        '/admin/hotel'                        => 'HousingReservationControllers\HotelController',
        '/admin/hotel_reservation'            => 'HousingReservationControllers\HotelReservationController',
        '/admin/hotel_reservation_detail'     => 'HousingReservationControllers\HotelReservationDetailController',
        '/admin/hotel_room'                   => 'HousingReservationControllers\HotelRoomController',
        '/admin/housing_and_service'          => 'HousingReservationControllers\HousingAndServiceController',
        '/admin/housing_calendary'            => 'HousingReservationControllers\HousingCalendaryController',
        '/admin/housing_service'              => 'HousingReservationControllers\HousingServiceController',
        '/admin/private_housing'              => 'HousingReservationControllers\PrivateHousingController',
        '/admin/room'                         => 'HousingReservationControllers\RoomController',
        '/admin/service_and_room'             => 'HousingReservationControllers\ServiceAndRoomController',
    ]);

    /* Otros */
    Route::resources([
        // '/admin/cart'                         => 'OthersControllers\CartController',
        '/admin/package'                      => 'OthersControllers\PackageController',
        '/admin/sell'                         => 'OthersControllers\SellController',
        // '/admin/users'                        => 'OthersControllers\UserController',
        ]);
});

Route::group(['middleware' => 'auth'], function() {

    /* Reservas */

    Route::resources([
        /* Profile */
        'checkout'                     => 'OthersControllers\CheckoutController',
        'profile'                      => 'OthersControllers\ProfileController',                   
        /* Vehículo */
        'vehicle_reservation'          => 'VehicleReservationControllers\VehicleReservationController',
        'vehicle_reservation_detail'   => 'VehicleReservationControllers\VehicleReservationDetailController',
        /* Vuelo */
        'flight_reservation'           => 'FlightReservationControllers\FlightReservationController',
        'flight_sell_detail'           => 'FlightReservationControllers\FlightSellDetailController',
        /* Alojamiento */
        'hotel_reservation'            => 'HousingReservationControllers\HotelReservationController',
        'hotel_reservation_detail'     => 'HousingReservationControllers\HotelReservationDetailController',
    ]);

});

/* Vehiculos */
Route::resources([
    'service_and_provider'         => 'VehicleReservationControllers\ServiceAndProviderController',
    'vehicle_service'              => 'VehicleReservationControllers\VehicleServiceController',
    'vehicle_calendary'            => 'VehicleReservationControllers\VehicleCalendaryController',
    'vehicle'                      => 'VehicleReservationControllers\VehicleController',
    'vehicle_provider'             => 'VehicleReservationControllers\VehicleProviderController',
    'vehicle_service'              => 'VehicleReservationControllers\VehicleServiceController',
    'zone'                         => 'VehicleReservationControllers\ZoneController',
]);

/* Vuelos */
Route::resources([
    'airport'                      => 'FlightReservationControllers\AirportController',
    'checkin'                      => 'FlightReservationControllers\CheckInController',
    'company'                      => 'FlightReservationControllers\CompanyController',
    'flight'                       => 'FlightReservationControllers\FlightController',
    'flight_detail'                => 'FlightReservationControllers\FlightDetailController',
    'origin_destiny'               => 'FlightReservationControllers\OrigenDestinoController',
    'seat'                         => 'FlightReservationControllers\AsientoController',
    // '/aviones'                       => 'FlightReservationControllers\AvionController',     
]);    

/* Alojamiento */
Route::resources([
    'hotel'                        => 'HousingReservationControllers\HotelController',
    'hotel_room'                   => 'HousingReservationControllers\HotelRoomController',
    'housing_and_service'          => 'HousingReservationControllers\HousingAndServiceController',
    'housing_calendary'            => 'HousingReservationControllers\HousingCalendaryController',
    'housing_service'              => 'HousingReservationControllers\HousingServiceController',
    'private_housing'              => 'HousingReservationControllers\PrivateHousingController',
    'room'                         => 'HousingReservationControllers\RoomController',
    'service_and_room'             => 'HousingReservationControllers\ServiceAndRoomController',
]);

/* Otros */
Route::resources([
    'package'                      => 'OthersControllers\PackageController',
    'sell'                         => 'OthersControllers\SellController',
    'confirmation'                 => 'OthersControllers\BuyConfirmationController',
    // 'users'                        => 'OthersControllers\UserController',
]);
