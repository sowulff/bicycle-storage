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

        $attributes = [
            'name' => 'mos',
            'image' => 'https://static-01.daraz.com.np/p/acffd82a50e9e5bf7c58a43e22519863.png',
            'quanitity' => 'mos',
            'price' => 'mos',
        ];

        $response = $this
            ->actingAs($user)
            ->post("recipes.patch/{$bicycle->id}", $attributes);

        $this->assertDatabaseHas('bicycles', $attributes);
        $response->assertStatus(200);
    }
}
