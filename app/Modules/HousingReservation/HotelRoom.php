<?php

namespace App\Modules\HousingReservation;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HotelRoom extends Model
{
    protected $table = 'hotel_rooms';
	
	protected $hotel_id;
    protected $capacidad;
    protected $camas;
	protected $numero;
	protected $precio;

    protected $fillable = [
    	'hotel_id',
    	'capacidad',
    	'camas',
		'numero',
		'precio'
	];
	
	/* Relaciones */

	public function hotelReservationDetail(){
    	return $this->hasMany(HotelReservationDetail::class);
	}

	public function housingCalendary(){
    	return $this->hasMany(HousingCalendary::class);
    }

	public function serviceAndRoom(){
    	return $this->hasMany(ServiceAndRoom::class);
	}
	
	public function hotel(){
    	return $this->belongsTo(Hotel::class);
	}
	
	public static function buscarHabitacion($params, $hotel_id)
	{
		/*'zona_id' => 'required|integer',
                'personas' => 'required|integer',
                'fecha-entrada-housing' => 'required|date',
				'fecha-salida-housing' => 'required|date'*/
			
	//  $id_escalas = DB::table('flight_details AS f1')
    //         ->join('flight_details AS f2', 'f2.origin_id', '=', 'f1.destiny_id')
    //         ->where('f1.origin_id', '=', $origen)
    //         ->where('f2.destiny_id', '=', $destino)
    //         ->whereDate(DB::raw('f2.fecha_despegue'), '>=',DB::raw('f1.fecha_aterrizaje'))
    //         ->whereRaw('DATE_PART(\'hour\', f2.fecha_despegue - f1.fecha_aterrizaje) < 3')
    //         ->whereRaw('DATE_PART(\'day\', f2.fecha_despegue - f1.fecha_aterrizaje) = 0')
    //         ->select('f1.id AS Vuelo1', 'f2.id AS Vuelo2')->get();

    //     return $id_escalas;
	// 	Select *
	// From hotel_rooms where id not in 
	// (SELECT hotel_rooms.id 
	// FROM hotel_rooms inner join hotel_reservations on (hotel_rooms.id = hotel_reservations.hotel_room_id)
	// where hotel_reservations.fecha_ingreso >= '2019-03-05' or hotel_reservations.fecha_egreso <= '2019-03-06') 
		$fechaEntrada = Carbon::createFromFormat('Y-m-d', $params['fecha-entrada-housing']);
		$fechaSalida= Carbon::createFromFormat('Y-m-d', $params['fecha-salida-housing']);
		$habitaciones = DB::table('hotel_rooms as rooms')
				->join('hotel_reservations as reservations', 'rooms.id', '=', 'reservations.hotel_room_id')
				->whereDate('reservations.fecha_ingreso', '<=', $fechaEntrada->format('Y-m-d'))
				->whereDate('reservations.fecha_egreso', '>=', $fechaEntrada->format('Y-m-d'))
				->orWhereDate('reservations.fecha_ingreso', '<=', $fechaSalida->format('Y-m-d'))
				->whereDate('reservations.fecha_egreso', '>=', $fechaSalida->format('Y-m-d'))
				->select('rooms.id', 'rooms.capacidad')->get();
		$room_final = [];
		$array_id = [];		
		$hotel_rooms = HotelRoom::all();
		foreach($habitaciones as $habitacion)
		{
			$array_id[] = $habitacion->id;
			//dump($habitacion->id);
		}
		$rooms = static::where('hotel_rooms.hotel_id', '=', $hotel_id)
			->whereNotIn('id', $array_id)->get();
		//dd($rooms);
		return $rooms;
	}
}
