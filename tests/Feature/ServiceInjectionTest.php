<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServiceInjectionTest extends TestCase
{
    public function testInjection()
    {
        $this->view('service-injection', ["name" => "Eko"])
            ->assertSeeText("Hello Eko");
    }
}
