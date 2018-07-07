<?php

namespace Tests\Unit;

use function factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\User;

class RecordCountUserTest extends TestCase{

    public function testCountRecordTest(){

        $user = User::all();

        //$userCount = 50;
        $userCount = $user->count();


        $this->assertCount($userCount,$user);
    }

}