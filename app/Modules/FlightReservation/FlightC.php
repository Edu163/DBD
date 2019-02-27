<?php


namespace App\Modules\FlightReservation;


class FlightC
{
    public $escala = [];

    public function __construct($escalaId = [])
    {
        foreach ($escalaId as $id) {
            $this->escala[] = FlightDetail::find($id);
        }
    }

}
