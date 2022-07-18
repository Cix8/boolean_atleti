<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = config('discipline')["categories"];

        foreach($categories as $category) {
            $new_category = new Category();
            $new_category->name = $category["name"];
            $new_category->discipline = $category["discipline"];
            $new_category->genre = $category["genre"];

            $new_category->save();
        }
    }
}
