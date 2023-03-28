<?php

namespace Database\Seeders;
use App\Models\City;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cities = [
            ["name"=>"Marrakech"],
            ["name"=>"Essaouira"],
            ["name"=>"Tangier"]
        ];
        //
        City::insert($cities);

    }
}
