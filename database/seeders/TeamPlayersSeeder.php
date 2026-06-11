<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamPlayersSeeder extends Seeder
{
    public function run()
    {
        DB::table('team_players')->insert([
            ['team_player_clubID' => '10', 'team_player_memberID' => '1', 'team_player_teamID' => '1', 'created_at' => now(), 'updated_at' => now()],
            ['team_player_clubID' => '11', 'team_player_memberID' => '2', 'team_player_teamID' => '2', 'created_at' => now(), 'updated_at' => now()],
            ['team_player_clubID' => '12', 'team_player_memberID' => '3', 'team_player_teamID' => '3', 'created_at' => now(), 'updated_at' => now()],
            ['team_player_clubID' => '13', 'team_player_memberID' => '4', 'team_player_teamID' => '4', 'created_at' => now(), 'updated_at' => now()],
            ['team_player_clubID' => '14', 'team_player_memberID' => '5', 'team_player_teamID' => '5', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
