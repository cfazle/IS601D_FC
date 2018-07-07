<?php

namespace Tests\Unit;

use function factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\Car;

class Update_carYear_Test extends TestCase

{
    //use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpadate_car_year_Test(){




        $car = Car::inRandomOrder()->first();
        $car->year = '2000';
        //  $car->save();
        $this->assertEquals($car->year, '2000');




    }
}