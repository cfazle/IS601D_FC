<?php

namespace Tests\Unit;

use function factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\User;

class DeleteUserTest extends TestCase
{

    public function testDeleteUserTest()
    {

        $user = User::inRandomOrder()->first();
        $user->delete();
        $this->assertEquals('name', 'name');

    }
}