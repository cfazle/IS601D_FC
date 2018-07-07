<?php

namespace Tests\Unit;

use function factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\User;

class InsertUserTest extends TestCase

{
    //use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUserTest()
    {


        $user = factory(User::class)->create(['name' => 'Test User']);
        $this->assertEquals($user->name, "Test User");


    }

}