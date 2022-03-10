<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AdminTest extends TestCase
{
    use RefreshDatabase;

    public function test_remove_admin_status()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('123');
        $user->is_admin = true;
        $user->save();

        $response = $this
            ->from('/')
            ->actingAs($user)
            ->post("removeAdmin/{$user->id}", [
                'is_admin' => false
            ]);
        $this->assertDatabaseHas('users', [
            'email' => 'admin@admin.com',
            'is_admin' => false,
        ]);
    }

    public function test_add_admin_status()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('123');
        $user->is_admin = true;
        $user->save();

        $userTester = new User();
        $userTester->name = 'admin_tester';
        $userTester->email = 'admin_tester@admin_tester.com';
        $userTester->password = Hash::make('123');
        $userTester->is_admin = false;
        $userTester->save();

        $response = $this
            ->from('/')
            ->actingAs($user)
            ->post("makeAdmin/{$userTester->id}", [
                'is_admin' => true
            ]);
        $this->assertDatabaseHas('users', [
            'email' => 'admin_tester@admin_tester.com',
            'is_admin' => true,
        ]);
    }

    public function test_edit_user()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('123');
        $user->is_admin = true;
        $user->save();

        $response = $this
            ->from('/')
            ->actingAs($user)
            ->post("editUser/{$user->id}", [
                'name' => "Kaka",
                'email' => "kaka@bulle.se"
            ]);
        $this->assertDatabaseHas('users', [
            'name' => "Kaka",
            'email' => "kaka@bulle.se"
        ]);
    }

    public function test_update_password()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('oldpassword123');
        $user->is_admin = true;
        $user->save();

        $response = $this
            ->from('/')
            ->actingAs($user)
            ->post("editUser/{$user->id}", [
                'name' => "$user->name",
                'email' => "$user->email",
                'password' => "newpassword123",
            ]);
        $this->followingRedirects()->post('logout');
        $login = $this->followingRedirects()->post('login', [
            'email' => $user->email,
            'password' => 'newpassword123',
        ]);
        $login->assertSuccessful();
    }
}
