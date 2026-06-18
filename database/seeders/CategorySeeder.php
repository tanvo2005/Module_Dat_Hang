<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->upsert([
            [
                'category_id' => 1,
                'categoryname' => 'Đầm',
                'description' => 'Các mẫu đầm nữ dự tiệc và dạo phố.',
            ],
            [
                'category_id' => 2,
                'categoryname' => 'Váy',
                'description' => 'Các mẫu váy nữ trẻ trung, thanh lịch.',
            ],
            [
                'category_id' => 3,
                'categoryname' => 'Áo thun',
                'description' => 'Áo thun nữ nhiều phong cách, dễ phối đồ.',
            ],
            [
                'category_id' => 4,
                'categoryname' => 'Quần jean',
                'description' => 'Quần jean nữ form đẹp, phù hợp nhiều dịp.',
            ],
        ], ['category_id'], ['categoryname', 'description']);
    }
}
