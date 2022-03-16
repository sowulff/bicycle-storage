<?php

namespace Tests\Feature;

use App\Models\Bicycle;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;


class BuyBicycleTest extends TestCase
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

    public function test_order_with_valid_quantity_bicycle()
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

        $bicycleQuantity = $bicycle->attributesToArray()['quantity'];

        $response = $this
            ->actingAs($user)
            ->followingRedirects()
            ->post("orderBike/{$bicycle->id}", [
                'quantity' => '1'
            ]);

        $this->assertDatabaseHas('bicycles', [
            'quantity' => $bicycleQuantity - 1
        ]);
    }

    public function test_order_too_many_bicycles()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('123');
        $user->save();

        $bicycle = Bicycle::factory()->create();
        $bicycleQuantity = $bicycle->attributesToArray()['quantity'];

        $response = $this
            ->from("/bicycles/buy/{$bicycle->id}")
            ->actingAs($user)
            ->followingRedirects()
            ->post("orderBike/{$bicycle->id}", [
                'quantity' => $bicycleQuantity + 1
            ]);

        $response->assertSeeText('Opps you are ordering too many bicycles!');
    }

    public function test_order_negative_amount_bicycles()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('123');
        $user->save();

        $bicycle = Bicycle::factory()->create();
        $bicycleQuantity = $bicycle->attributesToArray()['quantity'];

        $response = $this
            ->from("/bicycles/buy/{$bicycle->id}")
            ->actingAs($user)
            ->followingRedirects()
            ->post("orderBike/{$bicycle->id}", [
                'quantity' => '-5'
            ]);

            $this->assertDatabaseHas('bicycles', [
                'quantity' => $bicycleQuantity
            ]);
    }
}

