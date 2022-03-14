<?php

namespace Tests\Feature;

use App\Models\Bicycle;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;

class buyBicycleTest extends TestCase
{
    use RefreshDatabase;

    public function test_view_cart()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('123');
        $user->save();

        $bicycle = Bicycle::factory()->create();

        $response = $this
            ->actingAs($user)
            ->followingRedirects()
            ->get("/bicycles/buy/{$bicycle->id}");

        $response->assertStatus(200);
    }
}

