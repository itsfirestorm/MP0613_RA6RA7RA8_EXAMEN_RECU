<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoachesSeeder extends Seeder
{
    public function run()
    {
        DB::table('coaches')->insert([
            ['coach_name' => 'Waqar Younis',  'coach_image' => 'waqar.jpg',  'coach_clubID' => '10', 'coach_category' => 'Bowling',  'coach_status' => 'A', 'created_at' => now(), 'updated_at' => now()],
            ['coach_name' => 'Saeed Anwar',   'coach_image' => 'saeed.jpg',  'coach_clubID' => '11', 'coach_category' => 'Batting',  'coach_status' => 'A', 'created_at' => now(), 'updated_at' => now()],
            ['coach_name' => 'Misbah ul Haq', 'coach_image' => 'misbah.jpg', 'coach_clubID' => '12', 'coach_category' => 'Fielding', 'coach_status' => 'A', 'created_at' => now(), 'updated_at' => now()],
            ['coach_name' => 'Younis Khan',   'coach_image' => 'younis.jpg', 'coach_clubID' => '13', 'coach_category' => 'Batting',  'coach_status' => 'A', 'created_at' => now(), 'updated_at' => now()],
            ['coach_name' => 'Shoaib Akhtar', 'coach_image' => 'shoaib.jpg', 'coach_clubID' => '14', 'coach_category' => 'Bowling',  'coach_status' => 'A', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
