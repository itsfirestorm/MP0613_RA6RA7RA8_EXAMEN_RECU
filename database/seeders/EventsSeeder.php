<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSeeder extends Seeder
{
    public function run()
    {
        DB::table('events')->insert([
            [
                'event_title'       => 'Karachi Premier League 2024',
                'event_description' => 'Annual T20 tournament organized by Karachi Cricket Club featuring 8 teams.',
                'event_type'        => 'E',
                'event_clubID'      => '10',
                'event_image'       => 'kpl2024.jpg',
                'event_status'      => 'A',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'event_title'       => 'Punjab Cricket Championship',
                'event_description' => 'Inter-club one-day championship across Punjab region.',
                'event_type'        => 'E',
                'event_clubID'      => '11',
                'event_image'       => 'punjab_champ.jpg',
                'event_status'      => 'A',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'event_title'       => 'New Signing: Babar Azam joins Eagles',
                'event_description' => 'Islamabad Eagles are proud to announce the signing of top-order batsman Babar Azam.',
                'event_type'        => 'N',
                'event_clubID'      => '12',
                'event_image'       => 'babar_signing.jpg',
                'event_status'      => 'A',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'event_title'       => 'Rawalpindi Summer Cup 2024',
                'event_description' => 'Six-team round-robin tournament played at Pindi Cricket Stadium.',
                'event_type'        => 'E',
                'event_clubID'      => '13',
                'event_image'       => 'summer_cup.jpg',
                'event_status'      => 'A',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'event_title'       => 'Peshawar Youth Development Camp',
                'event_description' => 'Three-day training camp for players under 18, coached by national-level staff.',
                'event_type'        => 'N',
                'event_clubID'      => '14',
                'event_image'       => 'youth_camp.jpg',
                'event_status'      => 'A',
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
        ]);
    }
}
