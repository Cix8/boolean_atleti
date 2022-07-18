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
        $countries = config('disciplines')["countries"];

        foreach($countries as $country) {
            $new_country = new Nationality();
            $new_country->name = $country["name"];
            $new_country->acronym = $country["acronym"];

            $new_country->save();
        }
    }
}
