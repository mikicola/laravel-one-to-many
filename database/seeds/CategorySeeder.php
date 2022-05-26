<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Sport'
            ],
            [
                'name' => 'Jobs'
            ],
            [
                'name' => 'Politics'
            ],
            [
                'name' => 'Technology'
            ],
            [
                'name' => 'Travel'
            ],
            [
                'name' => 'Design'
            ],
        ];
        foreach ($categories as $category){
            Category::create($category);
        }
    }
}
