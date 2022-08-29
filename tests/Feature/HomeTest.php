<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHomePageIsWorking()
    {
        $response = $this->get('/');

        $response->assertSeeText('Creative-Web Students Chart');
        $response->assertSeeText('Micheal Zwalde');
    }

    public function testContactPageIsWorking()
    {
        $response = $this->get('/');

        $response->assertSeeText('Creative-Web Students Chart');
        $response->assertSeeText('Micheal Zwalde');
    }
}
