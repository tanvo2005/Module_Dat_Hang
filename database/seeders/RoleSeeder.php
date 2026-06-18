<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->upsert([
            [
                'role_id' => 1,
                'rolename' => 'admin',
            ],
            [
                'role_id' => 2,
                'rolename' => 'manager',
            ],
            [
                'role_id' => 3,
                'rolename' => 'customer',
            ],
        ], ['role_id'], ['rolename']);
    }
}
