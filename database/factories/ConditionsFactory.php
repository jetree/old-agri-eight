<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Condition::class, function (Faker $faker) {
    return [
        'machine_id' => '1',
        'temp' => $faker->numberBetween($min = 5,$max = 35),
        'water_temp' => $faker->numberBetween($min = 5,$max = 35),
        'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
    ];
});
