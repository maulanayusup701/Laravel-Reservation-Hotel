<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fullname' => 'Admin',
            'username' => 'admin',
            'age' => 20,
            'gender' => 'Male',
            'phone' => 123456789,
            'address' => 'Kazan',
            'email' => 'yana@gmail.com',
            'role_id' => 1,
            'password' => md5('admin'),
            'email_verified_at' => now()
        ]); 
    }
}
