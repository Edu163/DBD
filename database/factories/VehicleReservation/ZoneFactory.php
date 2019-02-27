<?php

use Faker\Generator as Faker;
use App\Modules\VehicleReservation\Zone;
use App\Modules\Others\City;
use App\Modules\Others\Country;

$factory->define(Zone::class, function (Faker $faker) {
    //Llaves foráneas
    //Llaves foráneas
	$cities_id = DB::table('cities')->select('id')->get();
    $city_id = $cities_id->random()->id;
    $city = City::findOrFail($city_id);
    $country_id = $city->pais_id;
    $country = Country::findOrFail($country_id);

    return [
        'nombre' => $faker->state,
        'ciudad_id' => $city_id,
        'pais' => $country->nombre,
    	'ciudad' => $city->nombre,
    	'direccion' => $faker->address,
    ];
});
