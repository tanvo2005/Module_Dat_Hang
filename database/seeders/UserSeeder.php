<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        DB::table('users')->upsert([
            [
                'id' => 1,
                'name' => 'manager',
                'email' => 'manager@example.com',
                'email_verified_at' => $now,
                'password' => Hash::make('12345678'),
                'fullname' => 'Quản Lý Cửa Hàng',
                'phone' => '0900000001',
                'address' => '12 Nguyễn Trãi, Quận 1, TP.HCM',
                'remember_token' => Str::random(10),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'name' => 'customer',
                'email' => 'customer@example.com',
                'email_verified_at' => $now,
                'password' => Hash::make('12345678'),
                'fullname' => 'Khách Hàng Mẫu',
                'phone' => '0900000002',
                'address' => '25 Lê Lợi, Quận 1, TP.HCM',
                'remember_token' => Str::random(10),
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ], ['id'], [
            'name',
            'email',
            'email_verified_at',
            'password',
            'fullname',
            'phone',
            'address',
            'remember_token',
            'updated_at',
        ]);
    }
}
