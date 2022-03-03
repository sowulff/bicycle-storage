<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_view_login_form()
    {
        $response = $this->get('/');
        $response->assertSee('Email');
        $response->assertStatus(200);
    }

    public function test_login_user()
    {
        $user = new User([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123'),
        ]);
        $user->save();


        $response = $this->followingRedirects()->post('login', [
            'email' => $user->email,
            'password' => '123',
        ]);

        $response->assertSeeText('Hello, admin!');
        $response->assertStatus(200);
    }

    public function test_login_user_without_password()
    {
        $user = new User([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123'),
        ]);
        $user->save();


        $response = $this->followingRedirects()->post('login', [
            'email' => $user->email,
            'password' => '',
        ]);

        $response->assertSeeText('Whoops, please try again!');
    }
}
