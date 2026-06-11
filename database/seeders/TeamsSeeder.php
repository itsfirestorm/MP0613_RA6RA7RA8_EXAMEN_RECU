<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsSeeder extends Seeder
{
    public function run()
    {
        DB::table('teams')->insert([
            ['team_clubID' => '10', 'team_name' => 'Karachi Strikers',    'team_description' => 'Aggressive batting lineup from Karachi.',      'team_category' => 'T', 'team_status' => 'A', 'created_at' => now(), 'updated_at' => now()],
            ['team_clubID' => '11', 'team_name' => 'Lahore Lions',        'team_description' => 'Balanced squad representing Lahore.',           'team_category' => 'T', 'team_status' => 'A', 'created_at' => now(), 'updated_at' => now()],
            ['team_clubID' => '12', 'team_name' => 'Islamabad Eagles',    'team_description' => 'Fast bowlers unit from the capital.',           'team_category' => 'H', 'team_status' => 'A', 'created_at' => now(), 'updated_at' => now()],
            ['team_clubID' => '13', 'team_name' => 'Rawalpindi Raptors',  'team_description' => 'Hard-hitting T20 specialists.',                 'team_category' => 'T', 'team_status' => 'A', 'created_at' => now(), 'updated_at' => now()],
            ['team_clubID' => '14', 'team_name' => 'Peshawar Zalmi XI',   'team_description' => 'Community team inspired by the franchise.',     'team_category' => 'H', 'team_status' => 'A', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
