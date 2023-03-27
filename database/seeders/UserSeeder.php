<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => "admin",
            'email' => "admin@admin.com",
            'password' => Hash::make('password')
        ]);
        
        User::create([
            'name' => "user",
            'email' => "user@admin.com",
            'password' => Hash::make('password')
        ]);
        
        User::factory(10)->create();
    }
}
