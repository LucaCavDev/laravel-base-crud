<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Device;
use Faker\Generator as Faker;

$factory->define(Device::class, function (Faker $faker) {
    return [


        'name' => $faker -> firstNameFemale,
        'model' => $faker -> uuid,
        'price' => $faker -> numberBetween($min = 10, $max = 500),
        'consumption' => $faker -> numberBetween($min = 1, $max = 9000),



    ];
});
