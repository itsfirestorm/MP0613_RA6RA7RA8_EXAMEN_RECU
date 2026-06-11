<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    // password: "password"
    private string $hash = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';

    public function run()
    {
        DB::table('admins')->insert([
            ['name' => 'Super Admin',   'email' => 'admin@admin.com',   'email_verified_at' => now(), 'password' => $this->hash, 'remember_token' => Str::random(10), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'John Smith',    'email' => 'john@admin.com',    'email_verified_at' => now(), 'password' => $this->hash, 'remember_token' => Str::random(10), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sara Khan',     'email' => 'sara@admin.com',    'email_verified_at' => now(), 'password' => $this->hash, 'remember_token' => Str::random(10), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ali Hassan',    'email' => 'ali@admin.com',     'email_verified_at' => now(), 'password' => $this->hash, 'remember_token' => Str::random(10), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Maria Ahmed',   'email' => 'maria@admin.com',   'email_verified_at' => now(), 'password' => $this->hash, 'remember_token' => Str::random(10), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
