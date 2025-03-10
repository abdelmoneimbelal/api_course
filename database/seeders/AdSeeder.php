<?php

namespace Database\Seeders;

use App\Models\Ad;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ad::create([
            'title'     => 'Ad 1',
            'phone'     => '123456789',
            'text'      => 'This is the first ad',
            'domain_id' => 1,
        ]);

        Ad::create([
            'title'     => 'Ad 2',
            'phone'     => '123456789',
            'text'      => 'This is the second ad',
            'domain_id' => 2,
        ]);
    }
}
