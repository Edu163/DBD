<?php

use Faker\Generator as Faker;

$factory->define(App\CalendarioAlojamiento::class, function (Faker $faker) {
    return [
    	'año' => $faker->year($max = 'now'),
    	'mes' => $faker->monthName($max = 'now'),
    	'dia' => $faker->dayOfMonth($max = 'now')
    ];
});