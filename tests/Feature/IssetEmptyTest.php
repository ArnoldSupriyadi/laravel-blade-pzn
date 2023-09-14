<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetAndEmpty()
    {
        $this->view("issetempty", [])
            ->assertDontSeeText("Hello")
            ->assertSeeText("I don't have any hobbies.", false);

        $this->view("issetempty", ["name" => "arnold"])
            ->assertSeeText("Hello, my is arnold")
            ->assertSeeText("I don't have any hobbies.", false);

            $this->view("issetempty", ["name" => "arnold", "hobbies" => ["coding"]])
            ->assertSeeText("Hello, my is arnold")
            ->assertDontSeeText("I don't have any hobbies.", false);
    }
}
