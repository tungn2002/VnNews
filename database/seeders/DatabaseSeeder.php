<?php

namespace Database\Seeders;

use App\Models\Category;
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
        'name' => 'tung',
        'email' => 'tung@gmail.com',
        'password' => bcrypt('123123'),
        'email_verified_at' => time()
    ]);
    Category::factory()->count(10)->hasArticles(10)->create();
    }
}
