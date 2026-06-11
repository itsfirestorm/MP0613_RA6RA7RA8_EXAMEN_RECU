<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroundsSeeder extends Seeder
{
    public function run()
    {
        DB::table('grounds')->insert([
            [
                'ground_cityID'      => 1,
                'ground_name'        => 'National Stadium',
                'ground_description' => 'Main international cricket stadium in Karachi with a capacity of 34000.',
                'ground_address'     => 'Stadium Road, Karachi',
                'ground_image'       => 'national_stadium.jpg',
                'ground_status'      => 1,
                'ground_perDayFee'   => '50000',
                'ground_perWeekFee'  => '300000',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'ground_cityID'      => 2,
                'ground_name'        => 'Gaddafi Stadium',
                'ground_description' => 'Premier cricket venue in Lahore, host of many international fixtures.',
                'ground_address'     => 'Ferozpur Road, Lahore',
                'ground_image'       => 'gaddafi_stadium.jpg',
                'ground_status'      => 1,
                'ground_perDayFee'   => '45000',
                'ground_perWeekFee'  => '270000',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'ground_cityID'      => 3,
                'ground_name'        => 'Diamond Ground Islamabad',
                'ground_description' => 'Modern cricket ground near the diplomatic enclave.',
                'ground_address'     => 'F-7 Markaz, Islamabad',
                'ground_image'       => 'diamond_ground.jpg',
                'ground_status'      => 1,
                'ground_perDayFee'   => '30000',
                'ground_perWeekFee'  => '180000',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'ground_cityID'      => 4,
                'ground_name'        => 'Pindi Cricket Stadium',
                'ground_description' => 'Historic ground in Rawalpindi, recently renovated.',
                'ground_address'     => 'Rawalpindi Cantonment, Rawalpindi',
                'ground_image'       => 'pindi_stadium.jpg',
                'ground_status'      => 1,
                'ground_perDayFee'   => '35000',
                'ground_perWeekFee'  => '210000',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'ground_cityID'      => 5,
                'ground_name'        => 'Arbab Niaz Stadium',
                'ground_description' => 'Premier cricket ground in Peshawar, used for domestic matches.',
                'ground_address'     => 'GT Road, Peshawar',
                'ground_image'       => 'arbab_niaz.jpg',
                'ground_status'      => 1,
                'ground_perDayFee'   => '28000',
                'ground_perWeekFee'  => '165000',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
        ]);
    }
}
