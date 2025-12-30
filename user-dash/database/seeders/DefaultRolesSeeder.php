<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultRolesSeeder extends Seeder
{
    public function run()
    {
        echo "Seeding roles...\n";

        DB::table('roles')->updateOrInsert(
            ['name' => 'admin'],
            [
                'description' => 'Administrator role',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('roles')->updateOrInsert(
            ['name' => 'user'],
            [
                'description' => 'Standard user role',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        echo "Roles seeded successfully.\n";
    }
}
