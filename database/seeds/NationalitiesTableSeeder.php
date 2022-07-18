<?php

use App\Nationality;
use Illuminate\Database\Seeder;

class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                "name" => "Italia",
                "acronym" => "IT"
            ],
            [
                "name" => "Stati Uniti d'America",
                "acronym" => "USA"
            ],
            [
                "name" => "Cina",
                "acronym" => "CHN"
            ],
            [
                "name" => "Regno Unito",
                "acronym" => "GBR"
            ],
            [
                "name" => "Germania",
                "acronym" => "GER"
            ],
            [
                "name" => "Marocco",
                "acronym" => "MAR"
            ],
            [
                "name" => "Cuba",
                "acronym" => "CUB"
            ],
        ];

        foreach($countries as $country) {
            $new_country = new Nationality();
            $new_country->name = $country["name"];
            $new_country->acronym = $country["acronym"];

            $new_country->save();
        }
    }
}
