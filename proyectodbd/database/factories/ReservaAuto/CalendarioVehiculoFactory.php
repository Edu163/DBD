<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAuto\CalendarioVehiculo;

$factory->define(CalendarioVehiculo::class, function (Faker $faker) {

    return [
        'año' => $faker->year($max = 'now'),
        'mes' => $faker->monthName($max = 'now'),
        'dia' => $faker->dayOfMonth($max = 'now')
    ];
});
