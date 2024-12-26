<?php

namespace Database\Seeders;

use App\Models\Specialist;
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
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Specialist::create([
            'name' => 'Dokter Umum',
        ]);

        Specialist::create([
            'name' => 'Dokter Gigi',
        ]);

        Specialist::create([
            'name' => 'Dokter Kandungan',
        ]);
    }
}
