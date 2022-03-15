<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class CreateBicycleTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_bicycle()
    {

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('123');
        $user->is_admin = true;
        $user->save();

        $response = $this
            ->from('/')
            ->followingRedirects()
            ->actingAs($user)
            ->post('upload', [
                'name' => 'Superbike',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Left_side_of_Flying_Pigeon.jpg',
                'price' => 1000,
                'quantity' => 10,
            ]);

        $this->assertDatabaseHas('bicycles', [
            'name' => 'Superbike',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Left_side_of_Flying_Pigeon.jpg',
            'price' => 1000,
            'quantity' => 10,
        ]);
    }
}
