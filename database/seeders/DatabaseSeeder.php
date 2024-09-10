<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        //cara 1
        // Post::factory(100)->recycle([
        //     Category::factory(6)->create(),
        //     User::factory(5)->create()
        // ])->create();
        
        //cara 2
        $this->call([
            CategorySeeder::class, 
            UserSeeder::class
        ]);
        
        $categories = Category::all();
        $users = User::all();
        
        Post::factory(100)
            ->recycle($categories)
            ->recycle($users)
            ->create();
        
    }
}
