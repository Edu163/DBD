<?php

use Faker\Generator as Faker;

$factory->define(App\Avion::class, function (Faker $faker) {
	$companias_id = DB::table('companias')->select('id')->get();
    return [
        //
        'modelo' => $faker->lastName,
    	'motores' => $faker->randomElement($array = array (2,4)),
    	'color' => $faker->colorName,
    	'compania_id' => $companias_id->random()->id,
    ];
});
