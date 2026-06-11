<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchDetailsSeeder extends Seeder
{
    public function run()
    {
        DB::table('match_details')->insert([
            [
                'match_detail_matchID'              => '1',
                'match_detail_playerID'             => '1',
                'match_detail_player_overs'         => 4.0,
                'match_detail_player_overs_score'   => '32',
                'match_detail_player_balls'         => '24',
                'match_detail_player_score'         => '85',
                'match_detail_player_wickets'       => '0',
                'match_detail_player_out_status'    => 'NO',
                'match_detail_player_position'      => 'Opener',
                'match_detail_player_award_desc'    => 'Highest run scorer of the match with a stunning 85 off 60 balls.',
                'match_detail_player_award'         => 'MOM',
                'created_at'                        => now(),
                'updated_at'                        => now(),
            ],
            [
                'match_detail_matchID'              => '1',
                'match_detail_playerID'             => '2',
                'match_detail_player_overs'         => 4.0,
                'match_detail_player_overs_score'   => '28',
                'match_detail_player_balls'         => '24',
                'match_detail_player_score'         => '22',
                'match_detail_player_wickets'       => '3',
                'match_detail_player_out_status'    => 'O',
                'match_detail_player_position'      => 'Bowler',
                'match_detail_player_award_desc'    => 'Took 3 crucial wickets to restrict the opposition.',
                'match_detail_player_award'         => 'SOM',
                'created_at'                        => now(),
                'updated_at'                        => now(),
            ],
            [
                'match_detail_matchID'              => '2',
                'match_detail_playerID'             => '3',
                'match_detail_player_overs'         => 10.0,
                'match_detail_player_overs_score'   => '45',
                'match_detail_player_balls'         => '0',
                'match_detail_player_score'         => '110',
                'match_detail_player_wickets'       => '0',
                'match_detail_player_out_status'    => 'NO',
                'match_detail_player_position'      => 'Middle Order',
                'match_detail_player_award_desc'    => 'Anchored the innings with a composed century.',
                'match_detail_player_award'         => 'MOM',
                'created_at'                        => now(),
                'updated_at'                        => now(),
            ],
            [
                'match_detail_matchID'              => '2',
                'match_detail_playerID'             => '4',
                'match_detail_player_overs'         => 8.0,
                'match_detail_player_overs_score'   => '38',
                'match_detail_player_balls'         => '48',
                'match_detail_player_score'         => '15',
                'match_detail_player_wickets'       => '2',
                'match_detail_player_out_status'    => 'O',
                'match_detail_player_position'      => 'All-Rounder',
                'match_detail_player_award_desc'    => 'Contributed with both bat and ball.',
                'match_detail_player_award'         => 'COM',
                'created_at'                        => now(),
                'updated_at'                        => now(),
            ],
            [
                'match_detail_matchID'              => '4',
                'match_detail_playerID'             => '5',
                'match_detail_player_overs'         => 6.0,
                'match_detail_player_overs_score'   => '55',
                'match_detail_player_balls'         => '36',
                'match_detail_player_score'         => '62',
                'match_detail_player_wickets'       => '1',
                'match_detail_player_out_status'    => 'NO',
                'match_detail_player_position'      => 'Captain',
                'match_detail_player_award_desc'    => 'Led by example with a half-century and important wicket.',
                'match_detail_player_award'         => 'MOM',
                'created_at'                        => now(),
                'updated_at'                        => now(),
            ],
        ]);
    }
}
