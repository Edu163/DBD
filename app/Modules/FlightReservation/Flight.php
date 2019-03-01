<?php

namespace App\Modules\FlightReservation;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{

    protected $table = 'flights';
    public $escala = [];
    protected $tramo1_id;
    protected $tramo2_id;

    protected $fillable = [
        'origin_id',
        'destiny_id',
        'tramo1_id',
        'tramo2_id',
        'escalas',
        'precio',
    ];

    /*public function __construct($escalaId = [])
    {
        foreach ($escalaId as $id) {
            $this->escala[] = FlightDetail::find($id);
        }
    }*/
    public function getEscala1()
    {
        if(count($this->escala) > 0)
        {
            return $this->escala[0];
        }
        return null;
    }
    public function getEscala2()
    {
        if(count($this->escala) > 0)
        {
            if(count($this->escala) == 2)
            {
                return $this->escala[1];
            }
        }
        return null;
    }
    /** TEST */
    public function getFechaSalida1(){
        if(count($this->escala) > 0){
            $tramo1 = $this->escala[0];
            $fechaPartida = Carbon::parse($tramo1->fecha_despegue);
            return $fechaPartida;
        }
        return null;
    }
    public function getFechaAterrizaje1(){
        if(count($this->escala) > 0){
            $tramo1 = $this->escala[0];
            $fechaPartida = Carbon::parse($tramo1->fecha_aterrizaje);
            return $fechaPartida;
        }
        return null;
    }
    public function getFechaSalida2(){
        $largo = count($this->escala);
        if($largo > 0){
            $tramo1 = $this->escala[$largo - 1];
            $fechaDespegue = Carbon::parse($tramo1->fecha_despegue);
            return $fechaDespegue;
        }
        return null;
    }
    public function getFechaAterrizaje2(){
        $largo = count($this->escala);
        if($largo > 0){
            $tramo1 = $this->escala[$largo - 1];
            $fechaAterrizaje = Carbon::parse($tramo1->fecha_aterrizaje);
            return $fechaAterrizaje;
        }
        return null;
    }

    /** ----- */
    public function getOrigen(){
        if(count($this->escala) > 0){
            $tramo1 = $this->escala[0];
            return $tramo1->origin->ciudad;
        }
        return null;
    }
    public function getDestino(){
        $largo = count($this->escala);
        if($largo > 0)
        {
            $tramo2 = $this->escala[$largo-1];
            return $tramo2->destiny->ciudad;
        }
        return null;
    }
    public function getPrecio(){
        $precio = 0;
        foreach($this->escala as $escala){
            $precio = $precio + $escala->precio;
        }
        return $precio;
    }
    public function getFechaSalida(){
        if(count($this->escala) > 0){
            $tramo1 = $this->escala[0];
            $fechaPartida = Carbon::parse($tramo1->fecha_despegue);
            return $fechaPartida;
        }
        return null;
    }
    public function getFechaAterrizaje(){
        $largo = count($this->escala);
        if($largo > 0){
            $tramo1 = $this->escala[$largo - 1];
            $fechaAterrizaje = Carbon::parse($tramo1->fecha_aterrizaje);
            return $fechaAterrizaje;
        }
        return null;
    }
    public function duracion()
    {
        $cantidadEscalas = count($this->escala);
        $tramo1 = $this->escala[0];
        if($cantidadEscalas == 1){
            $fechaPartida = Carbon::parse($tramo1->fecha_despegue);
            $fechaLlegada = Carbon::parse($tramo1->fecha_aterrizaje);
            return $fechaLlegada->diff($fechaPartida)->format('%Hh %im');
        }
        else
        {
            $tramo2 = $this->escala[$cantidadEscalas-1];
            $fechaPartida = Carbon::parse($tramo1->fecha_despegue);
            $fechaLlegada = Carbon::parse($tramo2->fecha_aterrizaje);
            return $fechaLlegada->diff($fechaPartida)->format('%Hh %im');
        }

    }
    public function getNumeroEscalas()
    {
        return count($this->escala);
    }


    public function getTramo1()
    {
        return $this->belongsTo(FlightDetail::class, 'tramo1_id');
    }
    public function getTramo2()
    {
        return $this->belongsTo(FlightDetail::class, 'tramo2_id');
    }
}
