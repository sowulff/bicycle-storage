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

    public function test_removing_favorite_bicycle()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('123');
        $user->is_admin = true;
        $user->save();

        $bicycle = Bicycle::factory()->create();
        //die(var_dump($bicycle->id));

        $request = $this
            ->actingAs($user)
            ->followingRedirects()
            ->delete("deleteBicycle/" . $bicycle->id);

        $this->assertDatabaseMissing('bicycles', $bicycle->toArray());
        $request->assertSeeText("Bicycle has been deleted!");
    }
}
