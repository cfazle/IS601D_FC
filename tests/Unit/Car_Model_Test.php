<?php

namespace Tests\Unit;

use function factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\Car;

class Car_Model_Test extends TestCase

{


    /**
     *
     */
    public function testModelType()
    {
        $car = car::find(1);
        //  dd($car->year);

        //    $this->assertInternalType('int', $car->year);
        $this->assertInternalType('string', $car->model);





    }

}