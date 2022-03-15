<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;


class CreateUserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_user()
    {
        $request = $this
            ->followingRedirects()
            ->post('registerNewUser', [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => 'password'
            ]);

        $this->assertDatabaseHas('users', [
            'name' => 'admin',
            'email' => 'admin@admin.com',
        ]);
    }
}
