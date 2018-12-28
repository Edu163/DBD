<?php
use App\Avion;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Vuelos', function () {
	$aviones = Avion::all();
    return View('aviones')->with('aviones',$aviones);
});

Route::get('/home', 'HomeController@index')->name('home');

//VUELOS
/* Compania */
//Route::resource('companias', 'CompaniaController');
Route::get('/companias/all', 'ReservaVueloControllers\CompaniaController@index');
Route::get('/companias/show/{id}', 'ReservaVueloControllers\CompaniaController@show');
Route::get('/companias/destroy/{id}', 'ReservaVueloControllers\CompaniaController@destroy');
Route::get('/companias/store', 'ReservaVueloControllers\CompaniaController@store');
Route::get('/companias/update/{id}', 'ReservaVueloControllers\CompaniaController@update');
/* Avion */
Route::get('/aviones/all', 'ReservaVueloControllers\AvionController@index');
Route::get('/aviones/show/{id}', 'ReservaVueloControllers\AvionController@show');
Route::get('/aviones/destroy/{id}', 'ReservaVueloControllers\AvionController@destroy');
Route::get('/aviones/store', 'ReservaVueloControllers\AvionController@store');
Route::get('/aviones/update/{id}', 'ReservaVueloControllers\AvionController@update');
/* Asiento */
Route::get('/asientos/all', 'ReservaVueloControllers\AsientoController@index');
Route::get('/asientos/show/{id}', 'ReservaVueloControllers\AsientoController@show');
Route::get('/asientos/destroy/{id}', 'ReservaVueloControllers\AsientoController@destroy');
Route::get('/asientos/store', 'ReservaVueloControllers\AsientoController@store');
Route::get('/asientos/update/{id}', 'ReservaVueloControllers\AsientoController@update');
/* Asiento */
Route::get('/aeropuertos/all', 'ReservaVueloControllers\AeropuertoController@index');
Route::get('/aeropuertos/show/{id}', 'ReservaVueloControllers\AeropuertoController@show');
Route::get('/aeropuertos/destroy/{id}', 'ReservaVueloControllers\AeropuertoController@destroy');
Route::get('/aeropuertos/store', 'ReservaVueloControllers\AeropuertoController@store');
Route::get('/aeropuertos/update/{id}', 'ReservaVueloControllers\AeropuertoController@update');
/* CheckIn */
Route::get('/checkins/all', 'ReservaVueloControllers\CheckInController@index');
Route::get('/checkins/show/{id}', 'ReservaVueloControllers\CheckInController@show');
Route::get('/checkins/destroy/{id}', 'ReservaVueloControllers\CheckInController@destroy');
Route::get('/checkins/store', 'ReservaVueloControllers\CheckInController@store');
Route::get('/checkins/update/{id}', 'ReservaVueloControllers\CheckInController@update');
/* detalleVentaVuelo */
Route::get('/detallesVentasVuelos/all', 'ReservaVueloControllers\DetalleVentaVueloController@index');
Route::get('/detallesVentasVuelos/show/{id}', 'ReservaVueloControllers\DetalleVentaVueloController@show');
Route::get('/detallesVentasVuelos/destroy/{id}', 'ReservaVueloControllers\DetalleVentaVueloController@destroy');
Route::get('/detallesVentasVuelos/store', 'ReservaVueloControllers\DetalleVentaVueloController@store');
Route::get('/detallesVentasVuelos/update/{id}', 'ReservaVueloControllers\DetalleVentaVueloController@update');
/* detalleVuelo */
Route::get('/detallesVuelos/all', 'ReservaVueloControllers\DetalleVueloController@index');
Route::get('/detallesVuelos/show/{id}', 'ReservaVueloControllers\DetalleVueloController@show');
Route::get('/detallesVuelos/destroy/{id}', 'ReservaVueloControllers\DetalleVueloController@destroy');
Route::get('/detallesVuelos/store', 'ReservaVueloControllers\DetalleVueloController@store');
Route::get('/detallesVuelos/update/{id}', 'ReservaVueloControllers\DetalleVueloController@update');
Route::get('/detallesVuelos/origen/{id}', 'ReservaVueloControllers\DetalleVueloController@filtrarOrigen');
Route::get('/detallesVuelos/destino/{id}', 'ReservaVueloControllers\DetalleVueloController@show');
/* Vuelo */
Route::get('/vuelos/all', 'ReservaVueloControllers\VueloController@index');
Route::get('/vuelos/show/{id}', 'ReservaVueloControllers\VueloController@show');
Route::get('/vuelos/destroy/{id}', 'ReservaVueloControllers\VueloController@destroy');
Route::get('/vuelos/store', 'ReservaVueloControllers\VueloController@store');
Route::get('/vuelos/update/{id}', 'ReservaVueloControllers\VueloController@update');
/* Origen_Destino */
Route::get('/origenesDestinos/all', 'ReservaVueloControllers\OrigenDestinoController@index');
Route::get('/origenesDestinos/show/{id}', 'ReservaVueloControllers\OrigenDestinoController@show');
Route::get('/origenesDestinos/destroy/{id}', 'ReservaVueloControllers\OrigenDestinoController@destroy');
Route::get('/origenesDestinos/store', 'ReservaVueloControllers\OrigenDestinoController@store');
Route::get('/origenesDestinos/update/{id}', 'ReservaVueloControllers\OrigenDestinoController@update');



/* Automovil */
Route::get('/automovil/all', 'ReservaAutoControllers\AutomovilController@index');
Route::get('/automovil/show/{id}', 'ReservaAutoControllers\AutomovilController@show');
Route::get('/automovil/destroy/{id}', 'ReservaAutoControllers\AutomovilController@destroy');
Route::get('/automovil/store', 'ReservaAutoControllers\AutomovilController@store');
Route::get('/automovil/update/{id}', 'ReservaAutoControllers\AutomovilController@update');

/* Calendario Vehiculo */
Route::get('/calendario_vehiculo/all', 'ReservaAutoControllers\CalendarioVehiculoController@index');
Route::get('/calendario_vehiculo/show/{id}', 'ReservaAutoControllers\CalendarioVehiculoController@show');
Route::get('/calendario_vehiculo/destroy/{id}', 'ReservaAutoControllers\CalendarioVehiculoController@destroy');
Route::get('/calendario_vehiculo/store', 'ReservaAutoControllers\CalendarioVehiculoController@store');
Route::get('/calendario_vehiculo/update/{id}', 'ReservaAutoControllers\CalendarioVehiculoController@update');

/* Detalle Reserva Auto */
Route::get('/detalle_reserva_auto/all', 'ReservaAutoControllers\DetalleReservaAutoController@index');
Route::get('/detalle_reserva_auto/show/{id}', 'ReservaAutoControllers\DetalleReservaAutoController@show');
Route::get('/detalle_reserva_auto/destroy/{id}', 'ReservaAutoControllers\DetalleReservaAutoController@destroy');
Route::get('/detalle_reserva_auto/store', 'ReservaAutoControllers\DetalleReservaAutoController@store');
Route::get('/detalle_reserva_auto/update/{id}', 'ReservaAutoControllers\DetalleReservaAutoController@update');

/* Proveedor */
Route::get('/proveedor/all', 'ReservaAutoControllers\ProveedorController@index');
Route::get('/proveedor/show/{id}', 'ReservaAutoControllers\ProveedorController@show');
Route::get('/proveedor/destroy/{id}', 'ReservaAutoControllers\ProveedorController@destroy');
Route::get('/proveedor/store', 'ReservaAutoControllers\ProveedorController@store');
Route::get('/proveedor/update/{id}', 'ReservaAutoControllers\ProveedorController@update');

/* Reserva Auto */
Route::get('/reserva_auto/all', 'ReservaAutoControllers\ReservaAutoController@index');
Route::get('/reserva_auto/show/{id}', 'ReservaAutoControllers\ReservaAutoController@show');
Route::get('/reserva_auto/destroy/{id}', 'ReservaAutoControllers\ReservaAutoController@destroy');
Route::get('/reserva_auto/store', 'ReservaAutoControllers\ReservaAutoController@store');
Route::get('/reserva_auto/update/{id}', 'ReservaAutoControllers\ReservaAutoController@update');

/* Servicio de Vehiculo */
Route::get('/servicio_de_vehiculo/all', 'ReservaAutoControllers\ServicioDeVehiculoController@index');
Route::get('/servicio_de_vehiculo/show/{id}', 'ReservaAutoControllers\ServicioDeVehiculoController@show');
Route::get('/servicio_de_vehiculo/destroy/{id}', 'ReservaAutoControllers\ServicioDeVehiculoController@destroy');
Route::get('/servicio_de_vehiculo/store', 'ReservaAutoControllers\ServicioDeVehiculoController@store');
Route::get('/servicio_de_vehiculo/update/{id}', 'ReservaAutoControllers\ServicioDeVehiculoController@update');

/* Servicio Proveedor */
Route::get('/servicio_proveedor/all', 'ReservaAutoControllers\ServicioProveedorController@index');
Route::get('/servicio_proveedor/show/{id}', 'ReservaAutoControllers\ServicioProveedorController@show');
Route::get('/servicio_proveedor/destroy/{id}', 'ReservaAutoControllers\ServicioProveedorController@destroy');
Route::get('/servicio_proveedor/store', 'ReservaAutoControllers\ServicioProveedorController@store');
Route::get('/servicio_proveedor/update/{id}', 'ReservaAutoControllers\ServicioProveedorController@update');

/* Servicio y Vehiculo */
Route::get('/servicio_y_vehiculo/all', 'ReservaAutoControllers\ServicioYVehiculoController@index');
Route::get('/servicio_y_vehiculo/show/{id}', 'ReservaAutoControllers\ServicioYVehiculoController@show');
Route::get('/servicio_y_vehiculo/destroy/{id}', 'ReservaAutoControllers\ServicioYVehiculoController@destroy');
Route::get('/servicio_y_vehiculo/store', 'ReservaAutoControllers\ServicioYVehiculoController@store');
Route::get('/servicio_y_vehiculo/update/{id}', 'ReservaAutoControllers\ServicioYVehiculoController@update');

/* Zona */
Route::get('/zona/all', 'ReservaAutoControllers\ZonaController@index');
Route::get('/zona/show/{id}', 'ReservaAutoControllers\ZonaController@show');
Route::get('/zona/destroy/{id}', 'ReservaAutoControllers\ZonaController@destroy');
Route::get('/zona/store', 'ReservaAutoControllers\ZonaController@store');
Route::get('/zona/update/{id}', 'ReservaAutoControllers\ZonaController@update');

/* Venta */
Route::get('/venta/all', 'VentaController@index');
Route::get('/venta/show/{id}', 'VentaController@show');
Route::get('/venta/destroy/{id}', 'VentaController@destroy');
Route::get('/venta/store', 'VentaController@store');
Route::get('/venta/update/{id}', 'VentaController@update');

/* Usuario */
Route::get('/user/all', 'UserController@index');
Route::get('/user/show/{id}', 'UserController@show');
Route::get('/user/destroy/{id}', 'UserController@destroy');
Route::get('/user/store', 'UserController@store');
Route::get('/user/update/{id}', 'UserController@update');
Route::get('/user/filtrar/origen/{id1}/destino/{id2}', 'UserController@buy');
Route::get('/user/buy/vuelo/{id}/', 'UserController@buy');


/* CRUD Reserva de Automoviles */
/*
Route::resources([
    'automoviles'               => 'ReservaAutoControllers\AutomovilController',
    'calendarios-vehiculos'     => 'ReservaAutoControllers\CalendarioVehiculoController',
    'detalles-reservas-autos'   => 'ReservaAutoControllers\DetalleReservaAutoController',
    'proveedores'               => 'ReservaAutoControllers\ProveedorController',
    'servicios-proveedores'     => 'ReservaAutoControllers\ServicioProveedorController',
    'servicios-y-vehiculos'     => 'ReservaAutoControllers\ServicioYVehiculoController',
    'zonas'                     => 'ReservaAutoControllers\ZonaController',
    'ventas'                    => 'ReservaAutoControllers\VentaController'.
    'users'                     => 'ReservaAutoControllers\UserController',
  ]);
*/

/* CRUD Otros */
/*
Route::resources([
    'ventas'                    => 'ReservaAutoControllers\VentaController'.
    'users'                     => 'ReservaAutoControllers\UserController',
    ]);
*/

