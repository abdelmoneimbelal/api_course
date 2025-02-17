<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'about_us' => 'about us',
            'counter1_name' => 'Subscriptions',
            'counter1_count' => '100',
            'counter2_name' => 'Cities Office',
            'counter2_count' => '50',
            'counter3_name' => 'Worker',
            'counter3_count' => '200',
            'counter4_name' => 'Happy Clients',
            'counter4_count' => '500',
        ]);

        Setting::create([
            'about_us' => 'about us 2',
            'counter1_name' => 'Subscriptions 2',
            'counter1_count' => '200',
            'counter2_name' => 'Cities Office 2',
            'counter2_count' => '100',
            'counter3_name' => 'Worker 2',
            'counter3_count' => '300',
            'counter4_name' => 'Happy Clients 2',
            'counter4_count' => '600',
        ]);
    }
}
