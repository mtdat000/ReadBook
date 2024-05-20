<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i < 6; $i++) { 
            User::factory()->create([
                'name' => 'Test User'. $i,
                'email' => 'test'. $i .'@example.com'
            ]);
        }
    }
}
