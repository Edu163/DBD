<?php

namespace App\Modules\VehicleReservation;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';

    protected $patente;
    protected $vehicle_calendary_id;
    protected $vehicle_provider_id;
    protected $zone_id;
    protected $marca;
    protected $tipo;
    protected $gamma;
    protected $transmision;
    protected $combustible;
    protected $n_pasajeros;
    protected $equipaje_g;
    protected $equipaje_p;
    protected $n_puertas;
    protected $n_kilometraje;
    protected $precio;
    protected $aire_acondicionado;

    protected $fillable = [
        'patente',
        'vehicle_calendary_id',
        'vehicle_provider_id',
        'zone_id',
        'marca',
        'tipo',
        'gamma',
        'transmision',
        'combustible',
        'n_pasajeros',
        'equipaje_g',
        'equipaje_p',
        'n_puertas',
        'n_kilometraje',
        'precio',
        'aire_acondicionado',
        'ciudad_id',
        'pais',
    	'ciudad',
    ];

    /* Relaciones */

    public function vehicleCalendary(){
    	return $this->belongsTo(VehicleCalendary::class);
    }

    public function zone(){
    	return $this->belongsTo(Zone::class);
    }

    public function vehicleProvider(){
    	return $this->belongsTo(VehicleProvider::class);
    }

    public function serviceAndVehicle(){
    	return $this->hasMany(ServiceAndVehicle::class);
    }

    public function vehicleReservation(){
    	return $this->hasMany(VehicleReservation::class);
    }

    public function vehicleReservationDetail(){
    	return $this->hasMany(VehicleReservationDetail::class);
    }

    public static function buscarVehiculos($params, $pasajeros)
	{
		$fechaRecogida = Carbon::createFromFormat('Y-m-d', $params['fecha-recogida']);
		$fechaDevolucion= Carbon::createFromFormat('Y-m-d', $params['fecha-devolucion']);
		$vehiculos = DB::table('vehicles')
				->join('vehicle_reservations as reservations', 'vehicles.id', '=', 'reservations.vehicle_id')
				->whereDate('reservations.fecha_retiro', '<=', $fechaRecogida->format('Y-m-d'))
				->whereDate('reservations.fecha_regreso', '>=', $fechaRecogida->format('Y-m-d'))
				->orWhereDate('reservations.fecha_retiro', '<=', $fechaDevolucion->format('Y-m-d'))
				->whereDate('reservations.fecha_regreso', '>=', $fechaDevolucion->format('Y-m-d'))
				->select('vehicles.id', 'vehicles.marca')->get();
		$room_final = [];
		$array_id = [];		
		$vehicles = Vehicle::all();
		foreach($vehiculos as $vehiculo)
		{
			$array_id[] = $vehiculo->id;
		}
		$autos = static::where('vehicles.patente', '=', $patente)
			->whereNotIn('id', $array_id)->get();
        return $autos;
        
        // $vehicles = Vehicle::where('zone_id', request('zone'))
        //             ->where('n_pasajeros', '>=', (int)$pasajeros)
        //             ->get();
	}
}
