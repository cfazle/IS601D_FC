<?php

namespace Tests\Unit;

use function factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\Car;

class CarMakeTest extends TestCase

{


    /**
     *
     */
    public function testcarMakeTest()
    {
        $car = car::find(1);
        //  dd($car->year);

        //    $this->assertInternalType('int', $car->year);
        $this->assertEquals($car->getMake(), 'ford');

        $car = car::find(2);
        $this->assertEquals($car->getMake(), 'toyota');

        $car = car::find(4);
        $this->assertEquals($car->getMake(), 'honda');


    }
}