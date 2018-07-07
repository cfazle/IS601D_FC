<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    $v = $faker->vehicleArray();
    return [
        'make' => $faker->randomElement($array = array ('ford','honda','toyota')),
        'model' => $v['model'],
       // 'year'  => $faker->biasedNumberBetween(1998,2018, 'sqrt'),
        'year'  => $faker->NumberBetween(1998,2018),
    ];
});
