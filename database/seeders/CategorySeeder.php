<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(6)->create();

        Category::create([
            'name' =>  'Web Disign',
            'slug' => 'web-disign',
            'color' => 'red'
        ]);
        Category::create([
            'name' =>  'UI UX',
            'slug' => 'ui-ux',
            'color' => 'sky'
        ]);
        Category::create([
            'name' =>  'Artificial Intelligence',
            'slug' => 'artificial-intelligence',
            'color' => 'lime'
        ]);
        Category::create([
            'name' =>  'Game Dev',
            'slug' => 'Game-dev',
            'color' => 'orange'
        ]);
        Category::create([
            'name' =>  'Data Analyst',
            'slug' => 'data-analyst',
            'color' => 'cyan'
        ]);
    }
}
