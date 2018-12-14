<?php
use App\Vuelo;
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
	$vuelos = Vuelo::all();
    return View('vuelos')->with('vuelos',$vuelos);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
