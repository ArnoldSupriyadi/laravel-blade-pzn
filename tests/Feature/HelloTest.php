<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get("/hello")
            ->assertSeeText("Arnold");
    }

    public function testHelloWorld()
    {
        $this->get("/world")
            ->assertSeeText("Arnold");
    }

    public function testHelloView()
    {
        $this->view('hello', ['name' => 'Arnold'])
            ->assertSeeText('Arnold');
    }

    public function testHelloWorldView()
    {
        $this->view('hello.world', ['name' => 'Arnold'])
            ->assertSeeText('Arnold');
    }
}
