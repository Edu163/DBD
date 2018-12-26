<?php
use App\Avion;
use App\AlojamientoPrivado;
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
//Route::get('/automovil/all', 'ReservaAutoControllers\AutomovilController@index');
//Route::get('/automovil/show/{id}', 'ReservaAutoControllers\AutomovilController@show');
//Route::get('/automovil/destroy/{id}/syv/{id}', 'ReservaAutoControllers\AutomovilController@destroy');
//Route::get('/automovil/store', 'ReservaAutoControllers\AutomovilController@store');

/* Calendario Vehiculo */

/* Detalle Reserva Auto */

/* Proveedor */

/* Reserva Auto */

/* Servicio de Vehiculo */

/* Servicio Proveedor */

/* Servicio y Vehiculo */

/* Zona */



/*Alojamiento+/

/*AlojamientoPrivado*/
Route::get('/alojamientoPrivado/all', '/ReservaAlojamientoControllers\AlojamientoPrivadoController@index');
Route::get('/alojamientoPrivado/show/{id}', '/ReservaAlojamientoControllers\AlojamientoPrivadoController@show');
Route::get('/alojamientoPrivado/destroy/{id}/syv/{id}', '/ReservaAlojamientoControllers\AlojamientoPrivadoController@destroy');
Route::get('/alojamientoPrivado/store', '/ReservaAlojamientoControllers\AlojamientoPrivadoController@store');



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
  ]);
*/