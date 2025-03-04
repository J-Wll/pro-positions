<?php

namespace Database\Seeders;

use App\Models\Employer;
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
        // default user for testing with employer
        User::factory()->create([
            'name' => 'Test User 1',
            'email' => 'test@example.com',
            "password" => "testpass1",
        ]);

        Employer::factory()->create(
            ["user_id" => 1]
        );

        // default user without employer
        User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
            "password" => "testpass2",
        ]);

        $this->call(JobSeeder::class);
    }
}
