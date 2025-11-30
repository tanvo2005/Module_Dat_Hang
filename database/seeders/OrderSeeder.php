<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // 1. Tắt kiểm tra khóa ngoại
        Schema::disableForeignKeyConstraints();

        // 2. Thực hiện Truncate các bảng
        DB::table('product_variants')->truncate(); // Nên xóa bảng con
        DB::table('products')->truncate();         // Sau đó xóa bảng cha

        // 3. Bật lại kiểm tra khóa ngoại
        Schema::enableForeignKeyConstraints();

        // ... Các logic seed dữ liệu của bạn ở dưới ..

    }
}
