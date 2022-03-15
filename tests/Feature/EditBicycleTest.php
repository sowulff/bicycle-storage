<?php

namespace Tests\Feature;

use App\Models\Bicycle;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;


class EditBicycleTest extends TestCase
{
    use RefreshDatabase;
    public function test_view_edit_bicycle()
    {
        // Create admin
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('123');
        $user->is_admin = true;
        $user->save();

        $bicycle = Bicycle::factory()->create();

        $response = $this
            ->actingAs($user)
            ->followingRedirects()
            ->get("bicycles/edit/" . $bicycle->id);
        $response->assertStatus(200);
    }

    public function test_edit_bicycle()
    {
        // Create admin
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('123');
        $user->is_admin = true;
        $user->save();

        $bicycle = Bicycle::factory()->create();



        $request = $this
            ->actingAs($user)
            ->followingRedirects()
            ->post("editBicycle/" . $bicycle->id, [
                'name' => 'Snabb cykel',
                'image' => 'https://dyncdn.thg.dk/img/122857141_0_m_719_1200.JPG',
                'quantity' => '23',
                'price' => '57000',
            ]);


        $this->assertDatabaseHas('bicycles', [
            'name' => 'Snabb cykel',
            'image' => 'https://dyncdn.thg.dk/img/122857141_0_m_719_1200.JPG',
            'quantity' => '23',
            'price' => '57000'
        ]);
    }
}
