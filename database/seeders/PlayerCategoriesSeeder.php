<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerCategoriesSeeder extends Seeder
{
    public function run()
    {
        DB::table('player_categories')->insert([
            ['category_name' => 'Batsman',        'category_status' => '1', 'created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'Bowler',         'category_status' => '1', 'created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'All-Rounder',    'category_status' => '1', 'created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'Wicket-Keeper',  'category_status' => '1', 'created_at' => now(), 'updated_at' => now()],
            ['category_name' => 'Captain',        'category_status' => '1', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
