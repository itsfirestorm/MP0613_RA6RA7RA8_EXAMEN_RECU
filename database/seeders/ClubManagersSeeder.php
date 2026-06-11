<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClubManagersSeeder extends Seeder
{
    // password: "password"  — IDs start at 10 due to AUTO_INCREMENT = 10
    private string $hash = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';

    public function run()
    {
        DB::table('club_managers')->insert([
            [
                'name'               => 'Usman Tariq',
                'email'              => 'usman@club.com',
                'image'              => 'usman.jpg',
                'status'             => 'A',
                'contact'            => '03001234567',
                'address'            => 'Block A, Karachi',
                'user_categoryID'    => 1,
                'email_verified_at'  => now(),
                'password'           => $this->hash,
                'remember_token'     => Str::random(10),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Bilal Chaudhry',
                'email'              => 'bilal@club.com',
                'image'              => 'bilal.jpg',
                'status'             => 'A',
                'contact'            => '03011234567',
                'address'            => 'Gulberg III, Lahore',
                'user_categoryID'    => 2,
                'email_verified_at'  => now(),
                'password'           => $this->hash,
                'remember_token'     => Str::random(10),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Asad Mehmood',
                'email'              => 'asad@club.com',
                'image'              => 'asad.jpg',
                'status'             => 'A',
                'contact'            => '03021234567',
                'address'            => 'F-8, Islamabad',
                'user_categoryID'    => 3,
                'email_verified_at'  => now(),
                'password'           => $this->hash,
                'remember_token'     => Str::random(10),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Kamran Aslam',
                'email'              => 'kamran@club.com',
                'image'              => 'kamran.jpg',
                'status'             => 'A',
                'contact'            => '03031234567',
                'address'            => 'Satellite Town, Rawalpindi',
                'user_categoryID'    => 4,
                'email_verified_at'  => now(),
                'password'           => $this->hash,
                'remember_token'     => Str::random(10),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Zubair Afridi',
                'email'              => 'zubair@club.com',
                'image'              => 'zubair.jpg',
                'status'             => 'A',
                'contact'            => '03041234567',
                'address'            => 'Hayatabad, Peshawar',
                'user_categoryID'    => 5,
                'email_verified_at'  => now(),
                'password'           => $this->hash,
                'remember_token'     => Str::random(10),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
        ]);
    }
}
