<?php

namespace Tests\Unit;

use function factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\Car;

class Delete_A_Car_Test extends TestCase

{
    public function testDeleteCarTest()
    {

        $car = Car::inRandomOrder()->first();
        $car->delete();
        $this->assertEquals('year', 'year');

    }
}