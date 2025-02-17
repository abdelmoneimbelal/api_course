<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::create([
            'name' => 'District 1',
            'city_id' => 1
        ]);

        District::create([
            'name' => 'District 2',
            'city_id' => 4
        ]);

        District::create([
            'name' => 'District 3',
            'city_id' => 1
        ]);

        District::create([
            'name' => 'District 4',
            'city_id' => 4
        ]);
    }
}
