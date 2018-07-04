<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    $v = $faker->vehicleArray();
    return [
        'Make' => $faker->randomElement($array = array ('ford','honda','toyota')),
        'Model' => $v['model'],
        'Year'  => $faker->biasedNumberBetween(1998,2017, 'sqrt'),
    ];
});
