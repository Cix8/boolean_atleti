<?php

use App\Athlete;
use Illuminate\Database\Seeder;

class AtheletesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $athlets = [
            [
                "name" => "Valarie Allman",
                "genre" => "Donna"
            ],
            [
                "name" => "Kendra Harrison",
                "genre" => "Donna"
            ],
            [
                "name" => "Soufiane el-Bakkali",
                "genre" => "Uomo"
            ],
            [
                "name" => "Luis Orta",
                "genre" => "Uomo"
            ],
            [
                "name" => "Nicolò Martinenghi",
                "genre" => "Uomo"
            ]
        ];

        foreach($athlets as $athlete) {
            $new_athlete = new Athlete();
            $new_athlete->name = $athlete["name"];
            $new_athlete->genre = $athlete["genre"];

            $new_athlete->save();
        }
    }
}
