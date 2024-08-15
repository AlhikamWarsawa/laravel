<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class testWeb extends TestCase
{
    public function testHome()
    {
        $this->view('home', ['nama' => 'home'])
            ->assertSeeText("Home");
    }

    public function testProfile()
    {
        $this->view('profile', ['nama' => 'profile'])
            ->assertSeeText("profile");
    }

    public function testAbout()
    {
        $this->view('about', ['nama' => 'about'])
            ->assertSeeText("about");
    }

}
