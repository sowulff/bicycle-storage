<?php

namespace Tests\Feature;

use App\Models\Bicycle;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;


class WishListTest extends TestCase
{
    use RefreshDatabase;

    public function test_view_wishlist()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('123');
        $user->save();

        $response = $this
            ->actingAs($user)
            ->followingRedirects()
            ->get('bicycles/list');

        $response->assertStatus(200);
    }

    public function test_view_empty_wishlist()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('123');
        $user->save();

        $response = $this
            ->actingAs($user)
            ->followingRedirects()
            ->get('bicycles/list');

        $response->assertStatus(200);
        $response->assertSeeText("The wishlist is empty 😢");
    }

    public function test_view_with_bicycle_wishlist()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('123');
        $user->save();

        $bicycle = new Bicycle();
        $bicycle->name = 'name';
        $bicycle->image = 'image';
        $bicycle->price = '3';
        $bicycle->quantity = '3';
        $bicycle->save();

        $wishlist = new Wishlist();
        $wishlist->bicycle_id = '1';
        $wishlist->user_id = $user->id;
        $wishlist->favorite = true;
        $wishlist->save();

        $response = $this
            ->actingAs($user)
            ->followingRedirects()
            ->get('bicycles/list');

        $response->assertStatus(200);
        $response->assertSeeText("Select bike 🛒");
    }
}
