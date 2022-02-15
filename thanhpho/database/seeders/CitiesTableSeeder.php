<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new City();
        $city->id = 1;
        $city->name = 'Hà Nội';
        $city->save();

        $city = new City();
        $city->id = 1;
        $city->name = 'Thành phố Hồ Chí Minh';
        $city->save();

        $city = new City();
        $city->id = 2;
        $city->name = 'Hải Phòng';
        $city->save();

        $city = new City();
        $city->id = 3;
        $city->name = 'Chí Linh';
        $city->save();


        $city = new City();
        $city->id = 4;
        $city->name = 'Đông Hà';
        $city->save();

        $city = new City();
        $city->id = 5;
        $city->name = 'Đồng Hới';
        $city->save();
    }
}
