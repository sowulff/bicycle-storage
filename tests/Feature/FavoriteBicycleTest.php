<?php

namespace Tests\Feature;

use App\Models\Bicycle;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Foundation\Testing\RefreshDatabase;
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

        $response = $this
            ->actingAs($user)
            ->get('bicycles/favorite/' . $bicycle->id);


        $this->assertDatabaseHas('wishlists', [
            'bicycle_id' => $bicycle->id,
            'user_id' =>  $user->id,
            'favorite' => true,
        ]);
    }

    public function test_removing_favorite_bicycle()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('123');
        $user->is_admin = true;
        $user->save();

        $wishlist = Wishlist::factory()->create();

        $request = $this
            ->actingAs($user)
            ->followingRedirects()
            ->get("bicycles/removeFavorite/" . $wishlist->id);

        $this->assertDatabaseMissing('wishlists', $wishlist->toArray());
    }
}
