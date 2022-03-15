<?php

namespace Tests\Feature;

use App\Models\Bicycle;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class DeleteBicycleTest extends TestCase
{
    use RefreshDatabase;

    public function test_delete_bicycle()
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
            ->delete("deleteBicycle/" . $bicycle->id);

        $this->assertDatabaseMissing('bicycles', $bicycle->toArray());
        $request->assertSeeText("Bicycle has been deleted!");
    }
}
