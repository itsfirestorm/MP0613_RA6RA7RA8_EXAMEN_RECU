<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    // password: "password"
    private string $hash = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';

    public function run()
    {
        DB::table('users')->insert([
            [
                'name'               => 'Ahmed Raza',
                'email'              => 'ahmed@cricket.com',
                'image'              => 'ahmed.jpg',
                'role'               => 'U',
                'status'             => 'A',
                'contact'            => '03051234567',
                'address'            => 'PECHS, Karachi',
                'user_clubManagerID' => '10',
                'user_categoryID'    => 1,
                'email_verified_at'  => now(),
                'password'           => $this->hash,
                'remember_token'     => Str::random(10),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Hamza Butt',
                'email'              => 'hamza@cricket.com',
                'image'              => 'hamza.jpg',
                'role'               => 'U',
                'status'             => 'A',
                'contact'            => '03061234567',
                'address'            => 'Model Town, Lahore',
                'user_clubManagerID' => '11',
                'user_categoryID'    => 2,
                'email_verified_at'  => now(),
                'password'           => $this->hash,
                'remember_token'     => Str::random(10),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Imran Malik',
                'email'              => 'imran@cricket.com',
                'image'              => 'imran.jpg',
                'role'               => 'U',
                'status'             => 'A',
                'contact'            => '03071234567',
                'address'            => 'G-10, Islamabad',
                'user_clubManagerID' => '12',
                'user_categoryID'    => 3,
                'email_verified_at'  => now(),
                'password'           => $this->hash,
                'remember_token'     => Str::random(10),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Faisal Nawaz',
                'email'              => 'faisal@cricket.com',
                'image'              => 'faisal.jpg',
                'role'               => 'U',
                'status'             => 'A',
                'contact'            => '03081234567',
                'address'            => 'Committee Chowk, Rawalpindi',
                'user_clubManagerID' => '13',
                'user_categoryID'    => 4,
                'email_verified_at'  => now(),
                'password'           => $this->hash,
                'remember_token'     => Str::random(10),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Tariq Shah',
                'email'              => 'tariq@cricket.com',
                'image'              => 'tariq.jpg',
                'role'               => 'U',
                'status'             => 'A',
                'contact'            => '03091234567',
                'address'            => 'University Road, Peshawar',
                'user_clubManagerID' => '14',
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
