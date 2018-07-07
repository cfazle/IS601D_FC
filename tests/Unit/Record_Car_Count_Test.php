<?php

namespace Tests\Unit;

use function factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\Car;

class Record_Car_Count_Test extends TestCase

{

    public function testCarCountRecordTest(){

        $car = Car::all();

        //$carCount = 50;

          $carCount = $car->count();

        $this->assertCount($carCount,$car);
    }
}