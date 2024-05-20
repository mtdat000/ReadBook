<?php

namespace Database\Seeders;

use App\Models\Book;
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

        for ($i=1; $i < 6; $i++) { 
            User::factory()->create([
                'name' => 'Test User'. $i,
                'email' => 'test'. $i .'@example.com'
            ]);
        }
        
        Book::factory(10)->create();
    }
}
