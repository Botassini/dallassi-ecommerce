<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::query()->updateOrCreate([
            'email' => 'admin@dallassi.local',
        ], [
            'name' => 'Admin Dallassi',
            'first_name' => 'Admin',
            'last_name' => 'Dallassi',
            'phone' => '11999999999',
            'password' => Hash::make('password'),
            'role' => UserRole::ADMIN,
            'email_verified_at' => now(),
        ]);

        User::query()->updateOrCreate([
            'email' => 'cliente@dallassi.local',
        ], [
            'name' => 'Cliente Dallassi',
            'first_name' => 'Cliente',
            'last_name' => 'Dallassi',
            'phone' => '11888888888',
            'password' => Hash::make('password'),
            'role' => UserRole::CLIENT,
            'email_verified_at' => now(),
        ]);
    }
}
