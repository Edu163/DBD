<?php

use Faker\Generator as Faker;
use App\Modules\HousingReservation\HousingCalendary;

$factory->define(HousingCalendary::class, function (Faker $faker) {
    return [
    	'año' => $faker->year($max = 'now'),
    	'mes' => $faker->monthName($max = 'now'),
    	'dia' => $faker->dayOfMonth($max = 'now')
    ];
});
