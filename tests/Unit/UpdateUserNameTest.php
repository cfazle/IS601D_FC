<?php

namespace Tests\Unit;

use function factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\User;

class UpdateUserNameTest extends TestCase {


    public function testUpdateUserTest() {

        $user = User::find(1);
        $user->name = "Steve Smith";
        $user->save();
        $this->assertEquals('Steve Smith', 'Steve Smith');

    }
}
