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
        $athlets = config('discipline')["athlets"];

        foreach($athlets as $athlete) {
            $new_athlete = new Athlete();
            $new_athlete->name = $athlete["name"];
            $new_athlete->genre = $athlete["genre"];

            $new_athlete->save();
        }
    }
}
