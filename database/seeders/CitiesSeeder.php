<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    public function run()
    {
        DB::table('cities')->insert([
            [
                'city'       => 'Karachi',
                'city_ascii' => 'Karachi',
                'lat'        => '24.8608',
                'lng'        => '67.0104',
                'country'    => 'Pakistan',
                'iso2'       => 'PK',
                'iso3'       => 'PAK',
                'admin_name' => 'Sindh',
                'capital'    => 'admin',
                'population' => '14910352',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city'       => 'Lahore',
                'city_ascii' => 'Lahore',
                'lat'        => '31.5497',
                'lng'        => '74.3436',
                'country'    => 'Pakistan',
                'iso2'       => 'PK',
                'iso3'       => 'PAK',
                'admin_name' => 'Punjab',
                'capital'    => 'admin',
                'population' => '11021000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city'       => 'Islamabad',
                'city_ascii' => 'Islamabad',
                'lat'        => '33.7215',
                'lng'        => '73.0433',
                'country'    => 'Pakistan',
                'iso2'       => 'PK',
                'iso3'       => 'PAK',
                'admin_name' => 'Islamabad',
                'capital'    => 'primary',
                'population' => '1014825',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city'       => 'Rawalpindi',
                'city_ascii' => 'Rawalpindi',
                'lat'        => '33.6007',
                'lng'        => '73.0679',
                'country'    => 'Pakistan',
                'iso2'       => 'PK',
                'iso3'       => 'PAK',
                'admin_name' => 'Punjab',
                'capital'    => '',
                'population' => '1743101',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city'       => 'Peshawar',
                'city_ascii' => 'Peshawar',
                'lat'        => '34.0150',
                'lng'        => '71.5249',
                'country'    => 'Pakistan',
                'iso2'       => 'PK',
                'iso3'       => 'PAK',
                'admin_name' => 'Khyber Pakhtunkhwa',
                'capital'    => 'admin',
                'population' => '1970042',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
