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
        $categories = [
            [
                "name" =>  "100m stile rana",
                "discipline" => "Nuoto",
                "genre" => "Maschile"
            ],
            [
                "name" =>  "200m stile libero",
                "discipline" => "Nuoto",
                "genre" => "Femminile"
            ],
            [
                "name" =>  "Trampolino",
                "discipline" => "Ginnastica",
                "genre" => "Femminile"
            ],
            [
                "name" => "Anelli",
                "discipline" => "Ginnastica",
                "genre" => "Maschile"
            ],
            [
                "name" => "Greco-romana",
                "discipline" => "Lotta",
                "genre" => "Maschile"
            ],
            [
                "name" => "3000 metri siepi",
                "discipline" => "Atletica Leggera",
                "genre" => "Maschile"
            ],
            [
                "name" => "100 metri ostacoli",
                "discipline" => "Atletica Leggera",
                "genre" => "Femminile"
            ],
            [
                "name" => "Lancio del disco",
                "discipline" => "Atletica Leggera",
                "genre" => "Femminile"
            ]
        ];

        foreach($categories as $category) {
            $new_category = new Category();
            $new_category->name = $category["name"];
            $new_category->discipline = $category["discipline"];
            $new_category->genre = $category["genre"];

            $new_category->save();
        }
    }
}
