<?php

namespace Tests\Unit;

use function factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\Car;

class Insert_car_Test extends TestCase

{
    //use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsert_a_Car_Test()
    {


        $user = factory(Car::class)->create(['make' => 'ford']);
        $this->assertEquals($user->make, "ford");


    }
}