<?php

namespace App\Modules\FlightReservation;

//use Illuminate\Support\Carbon;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FlightDetail extends Model
{
    protected $table = 'flight_details';

    // protected $avion_id;
    /* protected $flight_id;
    protected $airport_id;
    protected $origin_id;
    protected $destiny_id;
    protected $fecha_despegue;
    protected $fecha_aterrizaje;
    protected $precio; */

    protected $fillable = [
        // 'avion_id',
        'flight_id',
        'airport_id',
        'origin_id',
        'destiny_id',
        'fecha_despegue',
        'fecha_aterrizaje',
        'precio',
        'asientos_economy',
        'asientos_bussiness', 
        'asientos_premium',
    ];

    /* Relaciones */

    public function airplane()
    {
        return $this->belongsTo(Airplane::class);
    }

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }

    // public function origen_destino()
    // {
    //     return $this->hasMany(OrigenDestino::class);
    // }

    public function origin()
    {
        return $this->belongsTo(Airport::class, 'origin_id');
    }
    public function destiny()
    {
        return $this->belongsTo(Airport::class, 'destiny_id');
    }
    public function presentPrice()
    {
        return money_format('$%i', $this->precio);
    }
    public function horarioDespegue()
    {
        return Carbon::parse($this->fecha_despegue)->format('H:i d-m-Y');
    }

    public function horarioAterrizaje()
    {
        return Carbon::parse($this->fecha_aterrizaje)->format('H:i d-m-Y');
    }
    public function duracion()
    {
        $fechaPartida = Carbon::parse($this->fecha_despegue);
        $fechaLlegada = Carbon::parse($this->fecha_aterrizaje);

        return $fechaLlegada->diff($fechaPartida)->format('%Hh %im');
    }
    private static function buscarConEscala($params)
    {
        /* array de Vuelo's */
        $fechaPartida = Carbon::createFromFormat('Y-m-d', $params['fechaida']);

        $id_escalas = DB::table('flight_details AS f1')
                            ->join('flight_details AS f2', 'f2.origin_id', '=', 'f1.destiny_id')
                            ->where('f1.origin_id', '=', $params['origen'])
                            ->where('f2.destiny_id', '=', $params['destino'])
                            ->whereDate(DB::raw('f2.fecha_despegue'), '>=',DB::raw('f1.fecha_aterrizaje'))
                            ->whereRaw('DATE_PART(\'hour\', f2.fecha_despegue - f1.fecha_aterrizaje) < 2')
                            ->select('f1.id AS Vuelo1', 'f2.id AS Vuelo2')->get();


        //dump($id_escala);
        return $id_escalas;
    }

    public static function buscarVuelos($params)
    {

        $fechaPartida = Carbon::createFromFormat('Y-m-d', $params['fechaida']);
  
       $tramos = static::where('origin_id', '=', $params['origen'])
                         ->whereDate('fecha_despegue', '=', $fechaPartida->format('Y-m-d'))
                         ->get();
                         //dump($tramos);
       $vuelos = [];
        $vuelosTest = [];
       //$pasajeros = intval($params['pasajeros_adultos']) + intval($params['pasajeros_ninos']);
  
       foreach ($tramos as $tramo) {
         if ($tramo->destiny_id == $params['destino']) {
           //$asientosDisponibles = $tramo->asientosDisponibles();
  
           //if (count($asientosDisponibles) > $pasajeros) {
             $vuelosTest[] = new FlightC([$tramo->id]);
             //dump($tramo->id);
             $vuelos[] = $tramo;
           //}
         }
         else {
           //$conEscalas = static::buscarConEscala($tramo, $params);
  
           //$vuelos = array_merge($vuelos, $conEscalas);
         }
       }
        $id_escalas = self::buscarConEscala($params);
        $vuelosTest2 = self::agregarVuelosConEscala($id_escalas, $vuelosTest);
        //dump($vuelosTest2);
         return $vuelos;
     }

     public static function agregarVuelosConEscala($id_escalas, $vuelos)
     {

         foreach($id_escalas as $id){
             $vuelos[] = new FlightC([$id->Vuelo1, $id->Vuelo2]);
         }
         return $vuelos;
     }
}
