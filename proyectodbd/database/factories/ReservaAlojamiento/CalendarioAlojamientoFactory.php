<?php

use Faker\Generator as Faker;
use App\Modulos\ReservaAlojamiento\CalendarioAlojamiento;

$factory->define(CalendarioAlojamiento::class, function (Faker $faker) {
	
	return [
    	'año' => $faker->year($max = 'now'),
    	'mes' => $faker->monthName($max = 'now'),
    	'dia' => $faker->dayOfMonth($max = 'now')
    ];
});