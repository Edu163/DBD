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

