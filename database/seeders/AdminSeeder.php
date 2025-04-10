<?php
// Step 10: Create Admin Seeder for initial admin user
// File: database/seeders/AdminSeeder.php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Admin User',
            'email' => 'psychosocialcounsellingservice@gmail.com',
            'password' => Hash::make('Mental_health@2023'),
        ]);
    }
}