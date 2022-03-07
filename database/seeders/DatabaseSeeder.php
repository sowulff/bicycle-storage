<?php

namespace Database\Seeders;

use App\Models\Bicycle;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Bicycle::factory(15)->create();
        DB::table('users')->insert(
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'password' => Hash::make('admin123'),
                'is_admin' => true,
            ]
        );
        DB::table('users')->insert(
            [
                'name' => 'Tester',
                'email' => 'tester@tester.com',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'password' => Hash::make('tester123'),
                'is_admin' => false,
            ]
        );
    }
}
