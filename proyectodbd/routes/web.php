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

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function() {

  Route::get('/admin', 'HomeAdminController@index')->name('admin');

    /* Vehiculos */
  Route::resources([
      '/admin/vehiculo'                     => 'ReservaVehiculoControllers\VehiculoController',
      '/admin/calendario_vehiculo'          => 'ReservaVehiculoControllers\CalendarioVehiculoController',
      '/admin/detalle_reserva_vehiculo'     => 'ReservaVehiculoControllers\DetalleReservaVehiculoController',
      '/admin/reserva_vehiculo'             => 'ReservaVehiculoControllers\ReservaVehiculoController',
      '/admin/proveedore'                   => 'ReservaVehiculoControllers\ProveedorController',
      '/admin/servicio_proveedore'          => 'ReservaVehiculoControllers\ServicioProveedorController',
      '/admin/servicio_y_vehiculo'          => 'ReservaVehiculoControllers\ServicioYVehiculoController',
      '/admin/zona'                         => 'ReservaVehiculoControllers\ZonaController',
    ]);

    /* Vuelos */
Route::resources([
    '/admin/companias'                     => 'ReservaVueloControllers\CompaniaController',
    '/admin/aviones'                       => 'ReservaVueloControllers\AvionController',
    '/admin/reserva_vuelo'                 => 'ReservaVueloControllers\ReservaVueloController',
    '/admin/asientos'                      => 'ReservaVueloControllers\AsientoController',
    '/admin/aeropuertos'                   => 'ReservaVueloControllers\AeropuertoController',
    '/admin/checkins'                      => 'ReservaVueloControllers\CheckInController',
    '/admin/detallesVentasVuelos'          => 'ReservaVueloControllers\DetalleVentaVueloController',
    '/admin/detallesVuelos'                =>'ReservaVueloControllers\DetalleVueloController',
    '/admin/origenesDestinos'              => 'ReservaVueloControllers\OrigenDestinoController',
  ]);

/* Alojamiento */
Route::resources([
    '/admin/alojamiento_privado'           => 'ReservaAlojamientoControllers\AlojamientoPrivadoController',
    '/admin/alojamiento_servicio'          => 'ReservaAlojamientoControllers\AlojamientoServicioController',
    '/admin/calendario_alojamiento'        => 'ReservaAlojamientoControllers\CalendarioAlojamientoController',
    '/admin/detalle_reserva_hotel'         => 'ReservaAlojamientoControllers\DetalleReservaHotelController',
    '/admin/habitacion'                    => 'ReservaAlojamientoControllers\HabitacionController',
    '/admin/habitacion_hotel'              => 'ReservaAlojamientoControllers\HabitacionHotelController',
    '/admin/habitacion_servicio'           => 'ReservaAlojamientoControllers\HabitacionServicioController',
    '/admin/hotel'                         => 'ReservaAlojamientoControllers\HotelController',
    '/admin/reserva_hotel'                 => 'ReservaAlojamientoControllers\ReservaHotelController',
    '/admin/servicio_alojamiento'          => 'ReservaAlojamientoControllers\ServicioAlojamientoController',
  ]);

/* Otros */
Route::resources([
    '/admin/ventas'                        => 'ReservaAutoControllers\VentaController',
    '/admin/users'                         => 'ReservaAutoControllers\UserController',
    ]);
});

Route::group(['middleware' => 'auth'], function() {

    /* Otros */
  Route::resources([
      'ventas'                        => 'ReservaAutoControllers\VentaController',
      'users'                         => 'ReservaAutoControllers\UserController',
      'carrito'                       => 'CarritoControllers\CarritoController',
      'paquete'                       => 'PaqueteControllers\PaqueteController',
      ]);
  });

       /* Alojamiento */
  Route::resources([
      'alojamiento_privado'           => 'ReservaAlojamientoControllers\AlojamientoPrivadoController',
      'alojamiento_servicio'          => 'ReservaAlojamientoControllers\AlojamientoServicioController',
      'calendario_alojamiento'        => 'ReservaAlojamientoControllers\CalendarioAlojamientoController',
      'detalle_reserva_hotel'         => 'ReservaAlojamientoControllers\DetalleReservaHotelController',
      'habitacion'                    => 'ReservaAlojamientoControllers\HabitacionController',
      'habitacion_hotel'              => 'ReservaAlojamientoControllers\HabitacionHotelController',
      'habitacion_servicio'           => 'ReservaAlojamientoControllers\HabitacionServicioController',
      'hotel'                         => 'ReservaAlojamientoControllers\HotelController',
      'reserva_hotel'                 => 'ReservaAlojamientoControllers\ReservaHotelController',
      'servicio_alojamiento'          => 'ReservaAlojamientoControllers\ServicioAlojamientoController',
    ]);

      /* Vuelos */
  Route::resources([
      'companias'                     => 'ReservaVueloControllers\CompaniaController',
      'aviones'                       => 'ReservaVueloControllers\AvionController',
      'reserva_vuelo'                 => 'ReservaVueloControllers\ReservaVueloController',
      'asientos'                      => 'ReservaVueloControllers\AsientoController',
      'aeropuertos'                   => 'ReservaVueloControllers\AeropuertoController',
      'checkins'                      => 'ReservaVueloControllers\CheckInController',
      'detallesVentasVuelos'          => 'ReservaVueloControllers\DetalleVentaVueloController',
      'detallesVuelos'                =>'ReservaVueloControllers\DetalleVueloController',
      'origenesDestinos'              => 'ReservaVueloControllers\OrigenDestinoController',
    ]);

  /* Vehiculos */
  Route::resources([
      'vehiculo'                     => 'ReservaVehiculoControllers\VehiculoController',
      'calendario_vehiculo'          => 'ReservaVehiculoControllers\CalendarioVehiculoController',
      'detalle_reserva_vehiculo'     => 'ReservaVehiculoControllers\DetalleReservaVehiculoController',
      'reserva_vehiculo'             => 'ReservaVehiculoControllers\ReservaVehiculoController',
      'proveedore'                   => 'ReservaVehiculoControllers\ProveedorController',
      'servicio_proveedore'          => 'ReservaVehiculoControllers\ServicioProveedorController',
      'servicio_y_vehiculo'          => 'ReservaVehiculoControllers\ServicioYVehiculoController',
      'zona'                         => 'ReservaVehiculoControllers\ZonaController',
    ]);


/*Alojamiento+/

/*alojamientoPrivado*/
/*
Route::get('/alojamientoPrivado/all', 'ReservaAlojamientoControllers\AlojamientoPrivadoController@index');
Route::get('/alojamientoPrivado/show/{id}', 'ReservaAlojamientoControllers\AlojamientoPrivadoController@show');
Route::get('/alojamientoPrivado/destroy/{id}', 'ReservaAlojamientoControllers\AlojamientoPrivadoController@destroy');
Route::get('/alojamientoPrivado/store', 'ReservaAlojamientoControllers\AlojamientoPrivadoController@store');
Route::get('/alojamientoPrivado/update/{id}', 'ReservaAlojamientoControllers\AlojamientoPrivadoController@update');
/*alojamientoServicio*/
/*
Route::get('/alojamientoServicio/all', 'ReservaAlojamientoControllers\AlojamientoServicioController@index');
Route::get('/alojamientoServicio/show/{id}', 'ReservaAlojamientoControllers\AlojamientoServicioController@show');
Route::get('/alojamientoServicio/destroy/{id}', 'ReservaAlojamientoControllers\AlojamientoServicioController@destroy');
Route::get('/alojamientoServicio/store', 'ReservaAlojamientoControllers\AlojamientoServicioController@store');
Route::get('/alojamientoServicio/update/{id}', 'ReservaAlojamientoControllers\AlojamientoServicioController@update');
/*caledarioAlojamiento*/
/*
Route::get('/caledarioAlojamiento/all', 'ReservaAlojamientoControllers\CalendarioAlojamientoController@index');
Route::get('/caledarioAlojamiento/show/{id}', 'ReservaAlojamientoControllers\CalendarioAlojamientoController@show');
Route::get('/caledarioAlojamiento/destroy/{id}', 'ReservaAlojamientoControllers\CalendarioAlojamientoController@destroy');
Route::get('/caledarioAlojamiento/store', 'ReservaAlojamientoControllers\CalendarioAlojamientoController@store');
Route::get('/caledarioAlojamiento/update/{id}', 'ReservaAlojamientoControllers\CalendarioAlojamientoController@update');
/*detalleReservaHotel*/
/*
Route::get('/detalleReservaHotel/all', 'ReservaAlojamientoControllers\DetalleReservaHotelController@index');
Route::get('/detalleReservaHotel/show/{id}', 'ReservaAlojamientoControllers\DetalleReservaHotelController@show');
Route::get('/detalleReservaHotel/destroy/{id}', 'ReservaAlojamientoControllers\DetalleReservaHotelController@destroy');
Route::get('/detalleReservaHotel/store', 'ReservaAlojamientoControllers\DetalleReservaHotelController@store');
Route::get('/detalleReservaHotel/update/{id}', 'ReservaAlojamientoControllers\DetalleReservaHotelController@update');
/*habitacion*/
/*
Route::get('/habitacion/all', 'ReservaAlojamientoControllers\HabitacionController@index');
Route::get('/habitacion/show/{id}', 'ReservaAlojamientoControllers\HabitacionController@show');
Route::get('/habitacion/destroy/{id}', 'ReservaAlojamientoControllers\HabitacionController@destroy');
Route::get('/habitacion/store', 'ReservaAlojamientoControllers\HabitacionController@store');
Route::get('/habitacion/update/{id}', 'ReservaAlojamientoControllers\HabitacionController@update');
/*habitacionHotel*/
/*
Route::get('/habitacionHotel/all', 'ReservaAlojamientoControllers\HabitacionHotelController@index');
Route::get('/habitacionHotel/show/{id}', 'ReservaAlojamientoControllers\HabitacionHotelController@show');
Route::get('/habitacionHotel/destroy/{id}', 'ReservaAlojamientoControllers\HabitacionHotelController@destroy');
Route::get('/habitacionHotel/store', 'ReservaAlojamientoControllers\HabitacionHotelController@store');
Route::get('/habitacionHotel/update/{id}', 'ReservaAlojamientoControllers\HabitacionHotelController@update');
/*habitacionServicio*/
/*
Route::get('/habitacionServicio/all', 'ReservaAlojamientoControllers\HabitacionServicioController@index');
Route::get('/habitacionServicio/show/{id}', 'ReservaAlojamientoControllers\HabitacionServicioController@show');
Route::get('/habitacionServicio/destroy/{id}', 'ReservaAlojamientoControllers\HabitacionServicioController@destroy');
Route::get('/habitacionServicio/store', 'ReservaAlojamientoControllers\HabitacionServicioController@store');
Route::get('/habitacionServicio/update/{id}', 'ReservaAlojamientoControllers\HabitacionServicioController@update');
/*hotel*/
/*
Route::get('/hotel/all', 'ReservaAlojamientoControllers\HotelController@index');
Route::get('/hotel/show/{id}', 'ReservaAlojamientoControllers\HotelController@show');
Route::get('/hotel/destroy/{id}', 'ReservaAlojamientoControllers\HotelController@destroy');
Route::get('/hotel/store', 'ReservaAlojamientoControllers\HotelController@store');
Route::get('/hotel/update/{id}', 'ReservaAlojamientoControllers\HotelController@update');
/*reservaHotel*/
/*
Route::get('/reservaHotel/all', 'ReservaAlojamientoControllers\ReservaHotelController@index');
Route::get('/reservaHotel/show/{id}', 'ReservaAlojamientoControllers\ReservaHotelController@show');
Route::get('/reservaHotel/destroy/{id}', 'ReservaAlojamientoControllers\ReservaHotelController@destroy');
Route::get('/reservaHotel/store', 'ReservaAlojamientoControllers\ReservaHotelController@store');
Route::get('/reservaHotel/update/{id}', 'ReservaAlojamientoControllers\ReservaHotelController@update');
/*servicioAlojamiento*/
/*
Route::get('/servicioAlojamiento/all', 'ReservaAlojamientoControllers\ServicioAlojamientoController@index');
Route::get('/servicioAlojamiento/show/{id}', 'ReservaAlojamientoControllers\ServicioAlojamientoController@show');
Route::get('/servicioAlojamiento/destroy/{id}', 'ReservaAlojamientoControllers\ServicioAlojamientoController@destroy');
Route::get('/servicioAlojamiento/store', 'ReservaAlojamientoControllers\ServicioAlojamientoController@store');
Route::get('/servicioAlojamiento/update/{id}', 'ReservaAlojamientoControllers\ServicioAlojamientoController@update');

//VUELOS
/* Compania */
/*
Route::resource('companias', 'ReservaVueloControllers\CompaniaController');

/* Avion */
/*Route::get('/aviones/all', 'ReservaVueloControllers\AvionController@index');
Route::get('/aviones/show/{id}', 'ReservaVueloControllers\AvionController@show');
Route::get('/aviones/destroy/{id}', 'ReservaVueloControllers\AvionController@destroy');
Route::get('/aviones/store', 'ReservaVueloControllers\AvionController@store');
Route::get('/aviones/update/{id}', 'ReservaVueloControllers\AvionController@update');*/
/* Asiento */
/*Route::get('/asientos/all', 'ReservaVueloControllers\AsientoController@index');
Route::get('/asientos/show/{id}', 'ReservaVueloControllers\AsientoController@show');
Route::get('/asientos/destroy/{id}', 'ReservaVueloControllers\AsientoController@destroy');
Route::get('/asientos/store', 'ReservaVueloControllers\AsientoController@store');
Route::get('/asientos/update/{id}', 'ReservaVueloControllers\AsientoController@update');*/
/* Asiento */
/*Route::get('/aeropuertos/all', 'ReservaVueloControllers\AeropuertoController@index');
Route::get('/aeropuertos/show/{id}', 'ReservaVueloControllers\AeropuertoController@show');
Route::get('/aeropuertos/destroy/{id}', 'ReservaVueloControllers\AeropuertoController@destroy');
Route::get('/aeropuertos/store', 'ReservaVueloControllers\AeropuertoController@store');
Route::get('/aeropuertos/update/{id}', 'ReservaVueloControllers\AeropuertoController@update');*/
/* CheckIn */
/*Route::get('/checkins/all', 'ReservaVueloControllers\CheckInController@index');
Route::get('/checkins/show/{id}', 'ReservaVueloControllers\CheckInController@show');
Route::get('/checkins/destroy/{id}', 'ReservaVueloControllers\CheckInController@destroy');
Route::get('/checkins/store', 'ReservaVueloControllers\CheckInController@store');
Route::get('/checkins/update/{id}', 'ReservaVueloControllers\CheckInController@update');*/
/* detalleVentaVuelo */
/*Route::get('/detallesVentasVuelos/all', 'ReservaVueloControllers\DetalleVentaVueloController@index');
Route::get('/detallesVentasVuelos/show/{id}', 'ReservaVueloControllers\DetalleVentaVueloController@show');
Route::get('/detallesVentasVuelos/destroy/{id}', 'ReservaVueloControllers\DetalleVentaVueloController@destroy');
Route::get('/detallesVentasVuelos/store', 'ReservaVueloControllers\DetalleVentaVueloController@store');
Route::get('/detallesVentasVuelos/update/{id}', 'ReservaVueloControllers\DetalleVentaVueloController@update');*/
/* detalleVuelo */
/*Route::get('/detallesVuelos/all', 'ReservaVueloControllers\DetalleVueloController@index');
Route::get('/detallesVuelos/show/{id}', 'ReservaVueloControllers\DetalleVueloController@show');
Route::get('/detallesVuelos/destroy/{id}', 'ReservaVueloControllers\DetalleVueloController@destroy');
Route::get('/detallesVuelos/store', 'ReservaVueloControllers\DetalleVueloController@store');
Route::get('/detallesVuelos/update/{id}', 'ReservaVueloControllers\DetalleVueloController@update');*/
/* Vuelo */
/*Route::get('/vuelos/all', 'ReservaVueloControllers\VueloController@index');
Route::get('/vuelos/show/{id}', 'ReservaVueloControllers\VueloController@show');
Route::get('/vuelos/destroy/{id}', 'ReservaVueloControllers\VueloController@destroy');
Route::get('/vuelos/store', 'ReservaVueloControllers\VueloController@store');
Route::get('/vuelos/update/{id}', 'ReservaVueloControllers\VueloController@update');
/* Origen_Destino */
/*Route::get('/origenesDestinos/all', 'ReservaVueloControllers\OrigenDestinoController@index');
Route::get('/origenesDestinos/show/{id}', 'ReservaVueloControllers\OrigenDestinoController@show');
Route::get('/origenesDestinos/destroy/{id}', 'ReservaVueloControllers\OrigenDestinoController@destroy');
Route::get('/origenesDestinos/store', 'ReservaVueloControllers\OrigenDestinoController@store');
Route::get('/origenesDestinos/update/{id}', 'ReservaVueloControllers\OrigenDestinoController@update');
*/

/* Reserva Vehiculo */

/* Vehiculo */
/*
Route::get('/vehiculo/all', 'ReservaAutoControllers\Controller@index');
Route::get('/vehiculo/show/{id}', 'ReservaAutoControllers\VehiculoController@show');
Route::get('/vehiculo/destroy/{id}', 'ReservaAutoControllers\VehiculoController@destroy');
Route::get('/vehiculo/store', 'ReservaAutoControllers\VehiculoController@store');
Route::get('/vehiculo/update/{id}', 'ReservaAutoControllers\VehiculoController@update');
*/
/* Calendario Vehiculo */
/*
Route::get('/calendario_vehiculo/all', 'ReservaAutoControllers\CalendarioVehiculoController@index');
Route::get('/calendario_vehiculo/show/{id}', 'ReservaAutoControllers\CalendarioVehiculoController@show');
Route::get('/calendario_vehiculo/destroy/{id}', 'ReservaAutoControllers\CalendarioVehiculoController@destroy');
Route::get('/calendario_vehiculo/store', 'ReservaAutoControllers\CalendarioVehiculoController@store');
Route::get('/calendario_vehiculo/update/{id}', 'ReservaAutoControllers\CalendarioVehiculoController@update');
*/
/* Detalle Reserva Vehiculo */
/*
Route::get('/detalle_reserva_vehiculo/all', 'ReservaAutoControllers\DetalleReservaAutoController@index');
Route::get('/detalle_reserva_vehiculo/show/{id}', 'ReservaAutoControllers\DetalleReservaAutoController@show');
Route::get('/detalle_reserva_vehiculo/destroy/{id}', 'ReservaAutoControllers\DetalleReservaAutoController@destroy');
Route::get('/detalle_reserva_vehiculo/store', 'ReservaAutoControllers\DetalleReservaAutoController@store');
Route::get('/detalle_reserva_vehiculo/update/{id}', 'ReservaAutoControllers\DetalleReservaAutoController@update');
*/
/* Proveedor */
/*
Route::get('/proveedor/all', 'ReservaAutoControllers\ProveedorController@index');
Route::get('/proveedor/show/{id}', 'ReservaAutoControllers\ProveedorController@show');
Route::get('/proveedor/destroy/{id}', 'ReservaAutoControllers\ProveedorController@destroy');
Route::get('/proveedor/store', 'ReservaAutoControllers\ProveedorController@store');
Route::get('/proveedor/update/{id}', 'ReservaAutoControllers\ProveedorController@update');
*/
/* Reserva Vehiculo */
/*
Route::get('/reserva_auto/all', 'ReservaAutoControllers\ReservaAutoController@index');
Route::get('/reserva_auto/show/{id}', 'ReservaAutoControllers\ReservaAutoController@show');
Route::get('/reserva_auto/destroy/{id}', 'ReservaAutoControllers\ReservaAutoController@destroy');
Route::get('/reserva_auto/store', 'ReservaAutoControllers\ReservaAutoController@store');
Route::get('/reserva_auto/update/{id}', 'ReservaAutoControllers\ReservaAutoController@update');
*/
/* Servicio de Vehiculo */
/*
Route::get('/servicio_de_vehiculo/all', 'ReservaAutoControllers\ServicioDeVehiculoController@index');
Route::get('/servicio_de_vehiculo/show/{id}', 'ReservaAutoControllers\ServicioDeVehiculoController@show');
Route::get('/servicio_de_vehiculo/destroy/{id}', 'ReservaAutoControllers\ServicioDeVehiculoController@destroy');
Route::get('/servicio_de_vehiculo/store', 'ReservaAutoControllers\ServicioDeVehiculoController@store');
*/
/* Servicio Proveedor */
/*
Route::get('/servicio_proveedor/all', 'ReservaAutoControllers\ServicioProveedorController@index');
Route::get('/servicio_proveedor/show/{id}', 'ReservaAutoControllers\ServicioProveedorController@show');
Route::get('/servicio_proveedor/destroy/{id}', 'ReservaAutoControllers\ServicioProveedorController@destroy');
Route::get('/servicio_proveedor/store', 'ReservaAutoControllers\ServicioProveedorController@store');
Route::get('/servicio_proveedor/update/{id}', 'ReservaAutoControllers\ServicioProveedorController@update');
*/
/* Servicio y Vehiculo */
/*
Route::get('/servicio_y_vehiculo/all', 'ReservaAutoControllers\ServicioYVehiculoController@index');
Route::get('/servicio_y_vehiculo/show/{id}', 'ReservaAutoControllers\ServicioYVehiculoController@show');
Route::get('/servicio_y_vehiculo/destroy/{id}', 'ReservaAutoControllers\ServicioYVehiculoController@destroy');
Route::get('/servicio_y_vehiculo/store', 'ReservaAutoControllers\ServicioYVehiculoController@store');
Route::get('/servicio_y_vehiculo/update/{id}', 'ReservaAutoControllers\ServicioYVehiculoController@update');*/

/* Zona */
/*
/*Route::get('/zona/all', 'ReservaAutoControllers\ZonaController@index');
Route::get('/zona/show/{id}', 'ReservaAutoControllers\ZonaController@show');
Route::get('/zona/destroy/{id}', 'ReservaAutoControllers\ZonaController@destroy');
Route::get('/zona/store', 'ReservaAutoControllers\ZonaController@store');
Route::get('/zona/update/{id}', 'ReservaAutoControllers\ZonaController@update');
*/
/* Venta */
/*
Route::get('/venta/all', 'VentaController@index');
Route::get('/venta/show/{id}', 'VentaController@show');
Route::get('/venta/destroy/{id}', 'VentaController@destroy');
Route::get('/venta/store', 'VentaController@store');
Route::get('/venta/update/{id}', 'VentaController@update');
*/
/* Usuario */
/*
Route::get('/user/all', 'UserController@index');
Route::get('/user/show/{id}', 'UserController@show');
Route::get('/user/destroy/{id}', 'UserController@destroy');
Route::get('/user/store', 'UserController@store');
Route::get('/user/update/{id}', 'UserController@update');
*/