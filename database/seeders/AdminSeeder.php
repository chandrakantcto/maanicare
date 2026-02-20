<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Super Admin role if it doesn't exist
        $superAdminRole = Role::firstOrCreate(
            ['name' => 'Super Admin'],
            [
                'name' => 'Super Admin',
                'status' => 'Active',
            ]
        );

        // Create super admin user if it doesn't exist
        Admin::firstOrCreate(
            ['email' => 'admin@maanicare.com'],
            [
                'role_id' => $superAdminRole->id,
                'name' => 'Super Admin',
                'email' => 'admin@maanicare.com',
                'password' => Hash::make('admin123'), // Default password - should be changed after first login
                'status' => 'Active',
                'email_verified_at' => now(),
            ]
        );
    }
}
