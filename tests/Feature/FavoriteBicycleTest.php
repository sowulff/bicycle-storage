<?php

namespace Tests\Feature;

use App\Models\Bicycle;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;

class FavoriteBicycleTest extends TestCase
{
    use RefreshDatabase;

    public function test_adding_favorite_bicycle()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('123');
        $user->is_admin = true;
        $user->save();

        $bicycle = Bicycle::factory()->create();
        //die(var_dump($bicycle->id));

        $response = $this
            ->actingAs($user)
            ->get('bicycles/favorite/' . $bicycle->id);


        $this->assertDatabaseHas('wishlists', [
            'bicycle_id' => $bicycle->id,
            'user_id' =>  $user->id,
            'favorite' => true,
        ]);
    }
}
