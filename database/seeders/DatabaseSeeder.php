<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // UserFactory::factory()->create([
        //     'email' => 'test@test.com',
        //     'password' => 'test',
        // ]);

        \App\Models\User::factory()->create([
            'email' => 'test@test.com',
            'password' => 'test',
        ]);

        // $user = User::factory()->create([
        //     'name' => 'John Doe',
        //     'email' => 'john@gmail.com'
        // ]);

        // Listing::factory(6)->create([
        //     'user_id' => $user->id
        // ]);
    }
}
