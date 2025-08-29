<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Ruhul Amin',
            'email' => 'nijershastho@gmail.com',
            'password' => bcrypt('301410Bd'),
            'username' => 'nijershastho',
            'email_verified_at' => now(),
            'role' => 'admin',
        ]);
    }
}
