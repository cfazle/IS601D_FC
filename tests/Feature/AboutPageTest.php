<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AboutPageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAboutPageTest()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
}
