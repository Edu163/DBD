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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Vuelos', function () {
	$aviones = Avion::all();
    return View('aviones')->with('aviones',$aviones);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//VUELOS
/* Compania */
//Route::resource('companias', 'CompaniaController');
Route::get('/companias/all', 'ReservaVueloControllers\CompaniaController@index');
Route::get('/companias/show/{id}', 'ReservaVueloControllers\CompaniaController@show');
Route::get('/companias/destroy/{id}', 'ReservaVueloControllers\CompaniaController@destroy');
Route::get('/companias/store', 'ReservaVueloControllers\CompaniaController@store');
/* Avion */
Route::get('/aviones/all', 'ReservaVueloControllers\AvionController@index');
Route::get('/aviones/show/{id}', 'ReservaVueloControllers\AvionController@show');
Route::get('/aviones/destroy/{id}', 'ReservaVueloControllers\AvionController@destroy');
Route::get('/aviones/store', 'ReservaVueloControllers\AvionController@store');
/* Asiento */
Route::get('/asientos/all', 'ReservaVueloControllers\AsientoController@index');
Route::get('/asientos/show/{id}', 'ReservaVueloControllers\AsientoController@show');
Route::get('/asientos/destroy/{id}', 'ReservaVueloControllers\AsientoController@destroy');
Route::get('/asientos/store', 'ReservaVueloControllers\AsientoController@store');
/* Asiento */
Route::get('/aeropuertos/all', 'ReservaVueloControllers\AeropuertoController@index');
Route::get('/aeropuertos/show/{id}', 'ReservaVueloControllers\AeropuertoController@show');
Route::get('/aeropuertos/destroy/{id}', 'ReservaVueloControllers\AeropuertoController@destroy');
Route::get('/aeropuertos/store', 'ReservaVueloControllers\AeropuertoController@store');
/* CheckIn */
Route::get('/checkins/all', 'ReservaVueloControllers\CheckInController@index');
Route::get('/checkins/show/{id}', 'ReservaVueloControllers\CheckInController@show');
Route::get('/checkins/destroy/{id}', 'ReservaVueloControllers\CheckInController@destroy');
Route::get('/checkins/store', 'ReservaVueloControllers\CheckInController@store');
/* detalleVentaVuelo */
Route::get('/detallesVentasVuelos/all', 'ReservaVueloControllers\DetalleVentaVueloController@index');
Route::get('/detallesVentasVuelos/show/{id}', 'ReservaVueloControllers\DetalleVentaVueloController@show');
Route::get('/detallesVentasVuelos/destroy/{id}', 'ReservaVueloControllers\DetalleVentaVueloController@destroy');
Route::get('/detallesVentasVuelos/store', 'ReservaVueloControllers\DetalleVentaVueloController@store');
/* detalleVuelo */
Route::get('/detallesVuelos/all', 'ReservaVueloControllers\DetalleVueloController@index');
Route::get('/detallesVuelos/show/{id}', 'ReservaVueloControllers\DetalleVueloController@show');
Route::get('/detallesVuelos/destroy/{id}', 'ReservaVueloControllers\DetalleVueloController@destroy');
Route::get('/detallesVuelos/store', 'ReservaVueloControllers\DetalleVueloController@store');
/* Vuelo */
Route::get('/vuelos/all', 'ReservaVueloControllers\VueloController@index');
Route::get('/vuelos/show/{id}', 'ReservaVueloControllers\VueloController@show');
Route::get('/vuelos/destroy/{id}', 'ReservaVueloControllers\VueloController@destroy');
Route::get('/vuelos/store', 'ReservaVueloControllers\VueloController@store');
/* Origen_Destino */
Route::get('/origenesDestinos/all', 'ReservaVueloControllers\OrigenDestinoController@index');
Route::get('/origenesDestinos/show/{id}', 'ReservaVueloControllers\OrigenDestinoController@show');
Route::get('/origenesDestinos/destroy/{id}', 'ReservaVueloControllers\OrigenDestinoController@destroy');
Route::get('/origenesDestinos/store', 'ReservaVueloControllers\OrigenDestinoController@store');
