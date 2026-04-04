<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductVariantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_variants')->insert([
            // sp1 1.1
            [

                'product_id'=>1,
                'size'=>1,
                'color'=>'Màu Nâu',
                'price'=>390000,
                'img_ulr'=>'./assets/img/damid11.jpg',
                'quantity'=>30
            ],
            [

                'product_id'=>1,
                'size'=>2,
                'color'=>'Màu Nâu',
                'price'=>390000,
                'img_ulr'=>'./assets/img/damid11.jpg',
                'quantity'=>30
            ],
            [

                'product_id'=>1,
                'size'=>3,
                'color'=>'Màu Nâu',
                'price'=>390000,
                'img_ulr'=>'./assets/img/damid11.jpg',
                'quantity'=>30
            ],
            [

                'product_id'=>1,
                'size'=>4,
                'color'=>'Màu Nâu',
                'price'=>390000,
                'img_ulr'=>'./assets/img/damid11.jpg',
                'quantity'=>30
            ],


            //sp1.2
            [
                'product_id'=>1,
                'size'=>1,
                'color'=>'Màu kem',
                'price'=>470000,
                'img_ulr'=>'./assets/img/damid12.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>1,
                'size'=>2,
                'color'=>'Màu kem',
                'price'=>470000,
                'img_ulr'=>'./assets/img/damid12.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>1,
                'size'=>3,
                'color'=>'Màu kem',
                'price'=>470000,
                'img_ulr'=>'./assets/img/damid12.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>1,
                'size'=>4,
                'color'=>'Màu kem',
                'price'=>470000,
                'img_ulr'=>'./assets/img/damid12.jpg',
                'quantity'=>30
            ],
            // sp dam 2.1
            [
                'product_id'=>2,
                'size'=>1,
                'color'=>'Hồng Đỗ',
                'price'=>550550,
                'img_ulr'=>'./assets/img/damid21.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>2,
                'size'=>2,
                'color'=>'Hồng Đỗ',
                'price'=>550550,
                'img_ulr'=>'./assets/img/damid21.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>2,
                'size'=>3,
                'color'=>'Hồng Đỗ',
                'price'=>550550,
                'img_ulr'=>'./assets/img/damid21.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>2,
                'size'=>4,
                'color'=>'Hồng Đỗ',
                'price'=>550550,
                'img_ulr'=>'./assets/img/damid21.jpg',
                'quantity'=>30
            ],
            //sp dam 2.2
            [
                'product_id'=>2,
                'size'=>1,
                'color'=>'Đỏ đô',
                'price'=>450000,
                'img_ulr'=>'./assets/img/damid22.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>2,
                'size'=>2,
                'color'=>'Đỏ đô',
                'price'=>450000,
                'img_ulr'=>'./assets/img/damid22.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>2,
                'size'=>3,
                'color'=>'Đỏ đô',
                'price'=>450000,
                'img_ulr'=>'./assets/img/damid22.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>2,
                'size'=>4,
                'color'=>'Đỏ đô',
                'price'=>450000,
                'img_ulr'=>'./assets/img/damid22.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>2,
                'size'=>5,
                'color'=>'Đỏ đô',
                'price'=>450000,
                'img_ulr'=>'./assets/img/damid22.jpg',
                'quantity'=>30
            ],
            // sp dam 3.1
            [
                'product_id'=>3,
                'size'=>1,
                'color'=>'Xanh be',
                'price'=>365000,
                'img_ulr'=>'./assets/img/damid31.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>3,
                'size'=>2,
                'color'=>'Xanh be',
                'price'=>365000,
                'img_ulr'=>'./assets/img/damid31.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>3,
                'size'=>3,
                'color'=>'Xanh be',
                'price'=>365000,
                'img_ulr'=>'./assets/img/damid31.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>3,
                'size'=>4,
                'color'=>'Xanh be',
                'price'=>365000,
                'img_ulr'=>'./assets/img/damid31.jpg',
                'quantity'=>30
            ],
            // sp dam 3.2
            [
                'product_id'=>3,
                'size'=>1,
                'color'=>'Xanh be',
                'price'=>365000,
                'img_ulr'=>'./assets/img/damid32.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>3,
                'size'=>2,
                'color'=>'Xanh be',
                'price'=>365000,
                'img_ulr'=>'./assets/img/damid32.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>3,
                'size'=>3,
                'color'=>'Xanh be',
                'price'=>365000,
                'img_ulr'=>'./assets/img/damid32.jpg',
                'quantity'=>30
            ],
            // sp dam 4.1
            [
                'product_id'=>4,
                'size'=>1,
                'color'=>'Màu đen',
                'price'=>420000,
                'img_ulr'=>'./assets/img/damid41.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>4,
                'size'=>2,
                'color'=>'Màu đen',
                'price'=>420000,
                'img_ulr'=>'./assets/img/damid41.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>4,
                'size'=>3,
                'color'=>'Màu đen',
                'price'=>420000,
                'img_ulr'=>'./assets/img/damid41.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>4,
                'size'=>4,
                'color'=>'Màu đen',
                'price'=>420000,
                'img_ulr'=>'./assets/img/damid41.jpg',
                'quantity'=>30
            ],
            // sp dam 4.2
            [
                'product_id'=>4,
                'size'=>1,
                'color'=>'Màu nâu',
                'price'=>390000,
                'img_ulr'=>'./assets/img/damid42.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>4,
                'size'=>2,
                'color'=>'Màu nâu',
                'price'=>390000,
                'img_ulr'=>'./assets/img/damid42.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>4,
                'size'=>3,
                'color'=>'Màu nâu',
                'price'=>390000,
                'img_ulr'=>'./assets/img/damid42.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>4,
                'size'=>4,
                'color'=>'Màu nâu',
                'price'=>390000,
                'img_ulr'=>'./assets/img/damid42.jpg',
                'quantity'=>30
            ],
            // sp dam 5.1
            [
                'product_id'=>5,
                'size'=>1,
                'color'=>'Màu da',
                'price'=>316000,
                'img_ulr'=>'./assets/img/damid51.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>5,
                'size'=>2,
                'color'=>'Màu da',
                'price'=>316000,
                'img_ulr'=>'./assets/img/damid51.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>5,
                'size'=>3,
                'color'=>'Màu da',
                'price'=>316000,
                'img_ulr'=>'./assets/img/damid51.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>5,
                'size'=>4,
                'color'=>'Màu da',
                'price'=>316000,
                'img_ulr'=>'./assets/img/damid51.jpg',
                'quantity'=>30
            ],
            // sp dam 5.2
            [
                'product_id'=>5,
                'size'=>1,
                'color'=>'màu đen',
                'price'=>330000,
                'img_ulr'=>'./assets/img/damid52.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>5,
                'size'=>2,
                'color'=>'màu đen',
                'price'=>330000,
                'img_ulr'=>'./assets/img/damid52.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>5,
                'size'=>3,
                'color'=>'màu đen',
                'price'=>330000,
                'img_ulr'=>'./assets/img/damid52.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>5,
                'size'=>4,
                'color'=>'màu đen',
                'price'=>330000,
                'img_ulr'=>'./assets/img/damid52.jpg',
                'quantity'=>30
            ],
            // VÁY

            //sp vay 1.1
            [
                'product_id'=>6,
                'size'=>1,
                'color'=>'Màu hồng',
                'price'=>230000,
                'img_ulr'=>'./assets/img/vay11.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>6,
                'size'=>2,
                'color'=>'Màu hồng',
                'price'=>230000,
                'img_ulr'=>'./assets/img/vay11.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>6,
                'size'=>3,
                'color'=>'Màu hồng',
                'price'=>230000,
                'img_ulr'=>'./assets/img/vay11.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>6,
                'size'=>4,
                'color'=>'Màu hồng',
                'price'=>230000,
                'img_ulr'=>'./assets/img/vay11.jpg',
                'quantity'=>30
            ],
            // sp vay 1.2
            [
                'product_id'=>6,
                'size'=>1,
                'color'=>'Màu kem',
                'price'=>230000,
                'img_ulr'=>'./assets/img/vay12.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>6,
                'size'=>2,
                'color'=>'Màu kem',
                'price'=>230000,
                'img_ulr'=>'./assets/img/vay12.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>6,
                'size'=>3,
                'color'=>'Màu kem',
                'price'=>230000,
                'img_ulr'=>'./assets/img/vay12.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>6,
                'size'=>4,
                'color'=>'Màu kem',
                'price'=>230000,
                'img_ulr'=>'./assets/img/vay12.jpg',
                'quantity'=>30
            ],
            // sp vay 2.1
            [
                'product_id'=>7,
                'size'=>1,
                'color'=>'Màu đen',
                'price'=>249600,
                'img_ulr'=>'./assets/img/vay21.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>7,
                'size'=>2,
                'color'=>'Màu đen',
                'price'=>249600,
                'img_ulr'=>'./assets/img/vay21.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>7,
                'size'=>3,
                'color'=>'Màu đen',
                'price'=>249600,
                'img_ulr'=>'./assets/img/vay21.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>7,
                'size'=>4,
                'color'=>'Màu đen',
                'price'=>249600,
                'img_ulr'=>'./assets/img/vay21.jpg',
                'quantity'=>30
            ],
            // sp vay 2.2
            [
                'product_id'=>7,
                'size'=>1,
                'color'=>'Màu hồng',
                'price'=>300000,
                'img_ulr'=>'./assets/img/vay22.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>7,
                'size'=>2,
                'color'=>'Màu hồng',
                'price'=>300000,
                'img_ulr'=>'./assets/img/vay22.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>7,
                'size'=>3,
                'color'=>'Màu hồng',
                'price'=>300000,
                'img_ulr'=>'./assets/img/vay22.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>7,
                'size'=>4,
                'color'=>'Màu hồng',
                'price'=>300000,
                'img_ulr'=>'./assets/img/vay22.jpg',
                'quantity'=>30
            ],
            // sp vay 3.1
            [
                'product_id'=>8,
                'size'=>1,
                'color'=>'Kem',
                'price'=>335000,
                'img_ulr'=>'./assets/img/vay31.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>8,
                'size'=>2,
                'color'=>'Kem',
                'price'=>335000,
                'img_ulr'=>'./assets/img/vay31.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>8,
                'size'=>3,
                'color'=>'Kem',
                'price'=>335000,
                'img_ulr'=>'./assets/img/vay31.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>8,
                'size'=>4,
                'color'=>'Kem',
                'price'=>335000,
                'img_ulr'=>'./assets/img/vay31.jpg',
                'quantity'=>30
            ],
            // sp vay 3.2
            [
                'product_id'=>8,
                'size'=>1,
                'color'=>'Trắng',
                'price'=>370000,
                'img_ulr'=>'./assets/img/vay32.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>8,
                'size'=>2,
                'color'=>'Trắng',
                'price'=>370000,
                'img_ulr'=>'./assets/img/vay32.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>8,
                'size'=>3,
                'color'=>'Trắng',
                'price'=>370000,
                'img_ulr'=>'./assets/img/vay32.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>8,
                'size'=>4,
                'color'=>'Trắng',
                'price'=>370000,
                'img_ulr'=>'./assets/img/vay32.jpg',
                'quantity'=>30
            ],
            // sp vay 4.1
            [
                'product_id'=>9,
                'size'=>1,
                'color'=>'Kem',
                'price'=>253000,
                'img_ulr'=>'./assets/img/vay41.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>9,
                'size'=>2,
                'color'=>'Kem',
                'price'=>253000,
                'img_ulr'=>'./assets/img/vay41.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>9,
                'size'=>3,
                'color'=>'Kem',
                'price'=>253000,
                'img_ulr'=>'./assets/img/vay41.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>9,
                'size'=>4,
                'color'=>'Kem',
                'price'=>253000,
                'img_ulr'=>'./assets/img/vay41.jpg',
                'quantity'=>30
            ],
            // sp vay 4.2
            [
                'product_id'=>9,
                'size'=>1,
                'color'=>'Kem',
                'price'=>272000,
                'img_ulr'=>'./assets/img/vay42.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>9,
                'size'=>2,
                'color'=>'Kem',
                'price'=>272000,
                'img_ulr'=>'./assets/img/vay42.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>9,
                'size'=>3,
                'color'=>'Kem',
                'price'=>272000,
                'img_ulr'=>'./assets/img/vay42.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>9,
                'size'=>4,
                'color'=>'Kem',
                'price'=>272000,
                'img_ulr'=>'./assets/img/vay42.jpg',
                'quantity'=>30
            ],
            // sp vay 5.1
            [
                'product_id'=>10,
                'size'=>1,
                'color'=>'Trắng sữa',
                'price'=>217000,
                'img_ulr'=>'./assets/img/vay51.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>10,
                'size'=>2,
                'color'=>'Trắng sữa',
                'price'=>217000,
                'img_ulr'=>'./assets/img/vay51.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>10,
                'size'=>3,
                'color'=>'Trắng sữa',
                'price'=>217000,
                'img_ulr'=>'./assets/img/vay51.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>10,
                'size'=>4,
                'color'=>'Trắng sữa',
                'price'=>217000,
                'img_ulr'=>'./assets/img/vay51.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>10,
                'size'=>5,
                'color'=>'Trắng sữa',
                'price'=>217000,
                'img_ulr'=>'./assets/img/vay51.jpg',
                'quantity'=>30
            ],
            // sp vay 5.2
            [
                'product_id'=>10,
                'size'=>1,
                'color'=>'Trắng sữa',
                'price'=>227000,
                'img_ulr'=>'./assets/img/vay52.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>10,
                'size'=>2,
                'color'=>'Trắng sữa',
                'price'=>227000,
                'img_ulr'=>'./assets/img/vay52.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>10,
                'size'=>3,
                'color'=>'Trắng sữa',
                'price'=>227000,
                'img_ulr'=>'./assets/img/vay52.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>10,
                'size'=>4,
                'color'=>'Trắng sữa',
                'price'=>227000,
                'img_ulr'=>'./assets/img/vay52.jpg',
                'quantity'=>30
            ],

            // ÁO THUN

            //sp athun 1.1
            [
                'product_id'=>11,
                'size'=>1,
                'color'=>'Đỏ',
                'price'=>150000,
                'img_ulr'=>'./assets/img/Athun11.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>11,
                'size'=>2,
                'color'=>'Đỏ',
                'price'=>150000,
                'img_ulr'=>'./assets/img/Athun11.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>11,
                'size'=>3,
                'color'=>'Đỏ',
                'price'=>150000,
                'img_ulr'=>'./assets/img/Athun11.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>11,
                'size'=>4,
                'color'=>'Đỏ',
                'price'=>150000,
                'img_ulr'=>'./assets/img/Athun11.jpg',
                'quantity'=>30
            ],
            // sp athun 1.2
            [
                'product_id'=>11,
                'size'=>1,
                'color'=>'Xanh',
                'price'=>150000,
                'img_ulr'=>'./assets/img/Athun12.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>11,
                'size'=>2,
                'color'=>'Xanh',
                'price'=>150000,
                'img_ulr'=>'./assets/img/Athun12.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>11,
                'size'=>3,
                'color'=>'Xanh',
                'price'=>150000,
                'img_ulr'=>'./assets/img/Athun12.jpg',
                'quantity'=>30
            ],
            //sp athun 2.1
            [
                'product_id'=>12,
                'size'=>1,
                'color'=>'Hồng ruốc',
                'price'=>100000,
                'img_ulr'=>'./assets/img/athun21.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>12,
                'size'=>2,
                'color'=>'Hồng ruốc',
                'price'=>100000,
                'img_ulr'=>'./assets/img/athun21.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>12,
                'size'=>3,
                'color'=>'Hồng ruốc',
                'price'=>100000,
                'img_ulr'=>'./assets/img/athun21.jpg',
                'quantity'=>30
            ],
            //sp athun 2.2
            [
                'product_id'=>12,
                'size'=>1,
                'color'=>'Xám tiêu',
                'price'=>100000,
                'img_ulr'=>'./assets/img/athun22.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>12,
                'size'=>2,
                'color'=>'Xám tiêu',
                'price'=>100000,
                'img_ulr'=>'./assets/img/athun22.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>12,
                'size'=>3,
                'color'=>'Xám tiêu',
                'price'=>100000,
                'img_ulr'=>'./assets/img/athun22.jpg',
                'quantity'=>30
            ],
            // sp athun 3.1
            [
                'product_id'=>13,
                'size'=>1,
                'color'=>'Trắng',
                'price'=>160000,
                'img_ulr'=>'./assets/img/athun31.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>13,
                'size'=>2,
                'color'=>'Trắng',
                'price'=>160000,
                'img_ulr'=>'./assets/img/athun31.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>13,
                'size'=>3,
                'color'=>'Trắng',
                'price'=>160000,
                'img_ulr'=>'./assets/img/athun31.jpg',
                'quantity'=>30
            ],
            // sp athun 3.2
            [
                'product_id'=>13,
                'size'=>1,
                'color'=>'Đen',
                'price'=>160000,
                'img_ulr'=>'./assets/img/athun32.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>13,
                'size'=>2,
                'color'=>'Đen',
                'price'=>160000,
                'img_ulr'=>'./assets/img/athun32.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>13,
                'size'=>3,
                'color'=>'Đen',
                'price'=>160000,
                'img_ulr'=>'./assets/img/athun32.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>13,
                'size'=>4,
                'color'=>'Đen',
                'price'=>160000,
                'img_ulr'=>'./assets/img/athun32.jpg',
                'quantity'=>30
            ],
            // sp athun 4.1
            [
                'product_id'=>14,
                'size'=>1,
                'color'=>'xanh lá',
                'price'=>135000,
                'img_ulr'=>'./assets/img/athun41.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>14,
                'size'=>2,
                'color'=>'xanh lá',
                'price'=>135000,
                'img_ulr'=>'./assets/img/athun41.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>14,
                'size'=>3,
                'color'=>'xanh lá',
                'price'=>135000,
                'img_ulr'=>'./assets/img/athun41.jpg',
                'quantity'=>30
            ],
            // sp athun 4.2
            [
                'product_id'=>14,
                'size'=>1,
                'color'=>'nâu',
                'price'=>145000,
                'img_ulr'=>'./assets/img/athun42.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>14,
                'size'=>2,
                'color'=>'nâu',
                'price'=>145000,
                'img_ulr'=>'./assets/img/athun42.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>14,
                'size'=>3,
                'color'=>'nâu',
                'price'=>145000,
                'img_ulr'=>'./assets/img/athun42.jpg',
                'quantity'=>30
            ],
            //sp athun 5.1
            [
                'product_id'=>15,
                'size'=>1,
                'color'=>'Xanh than',
                'price'=>100000,
                'img_ulr'=>'./assets/img/athun51.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>15,
                'size'=>2,
                'color'=>'Xanh than',
                'price'=>100000,
                'img_ulr'=>'./assets/img/athun51.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>15,
                'size'=>3,
                'color'=>'Xanh than',
                'price'=>100000,
                'img_ulr'=>'./assets/img/athun51.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>15,
                'size'=>4,
                'color'=>'Xanh than',
                'price'=>100000,
                'img_ulr'=>'./assets/img/athun51.jpg',
                'quantity'=>30
            ],
            // sp athun 5.2
            [
                'product_id'=>15,
                'size'=>1,
                'color'=>'Màu be',
                'price'=>110000,
                'img_ulr'=>'./assets/img/athun52.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>15,
                'size'=>2,
                'color'=>'Màu be',
                'price'=>110000,
                'img_ulr'=>'./assets/img/athun52.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>15,
                'size'=>3,
                'color'=>'Màu be',
                'price'=>110000,
                'img_ulr'=>'./assets/img/athun52.jpg',
                'quantity'=>30
            ],
            // sp athun 6.1
            [
                'product_id'=>16,
                'size'=>1,
                'color'=>'Hồng',
                'price'=>138000,
                'img_ulr'=>'./assets/img/athun61.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>16,
                'size'=>2,
                'color'=>'Hồng',
                'price'=>138000,
                'img_ulr'=>'./assets/img/athun61.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>16,
                'size'=>3,
                'color'=>'Hồng',
                'price'=>138000,
                'img_ulr'=>'./assets/img/athun61.jpg',
                'quantity'=>30
            ],
            // sp athun 6.2
            [
                'product_id'=>16,
                'size'=>1,
                'color'=>'Xanh ngọc',
                'price'=>147000,
                'img_ulr'=>'./assets/img/athun62.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>16,
                'size'=>2,
                'color'=>'Xanh ngọc',
                'price'=>147000,
                'img_ulr'=>'./assets/img/athun62.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>16,
                'size'=>3,
                'color'=>'Xanh ngọc',
                'price'=>147000,
                'img_ulr'=>'./assets/img/athun62.jpg',
                'quantity'=>30
            ],

            // quần jean

            // sp jean 1.1
            [
                'product_id'=>17,
                'size'=>1,
                'color'=>'bạc phối ren',
                'price'=>222000,
                'img_ulr'=>'./assets/img/jean11.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>17,
                'size'=>2,
                'color'=>'bạc phối ren',
                'price'=>222000,
                'img_ulr'=>'./assets/img/jean11.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>17,
                'size'=>3,
                'color'=>'bạc phối ren',
                'price'=>222000,
                'img_ulr'=>'./assets/img/jean11.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>17,
                'size'=>4,
                'color'=>'bạc phối ren',
                'price'=>222000,
                'img_ulr'=>'./assets/img/jean11.jpg',
                'quantity'=>30
            ],
            // sp jean 1.2
            [
                'product_id'=>17,
                'size'=>1,
                'color'=>'Xanh than',
                'price'=>235000,
                'img_ulr'=>'./assets/img/jean12.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>17,
                'size'=>2,
                'color'=>'Xanh than',
                'price'=>235000,
                'img_ulr'=>'./assets/img/jean12.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>17,
                'size'=>3,
                'color'=>'Xanh than',
                'price'=>235000,
                'img_ulr'=>'./assets/img/jean12.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>17,
                'size'=>4,
                'color'=>'Xanh than',
                'price'=>235000,
                'img_ulr'=>'./assets/img/jean12.jpg',
                'quantity'=>30
            ],
            // sp jean 2.1
            [
                'product_id'=>18,
                'size'=>1,
                'color'=>'Nơ hồng',
                'price'=>205000,
                'img_ulr'=>'./assets/img/jean21.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>18,
                'size'=>2,
                'color'=>'Nơ hồng',
                'price'=>205000,
                'img_ulr'=>'./assets/img/jean21.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>18,
                'size'=>3,
                'color'=>'Nơ hồng',
                'price'=>205000,
                'img_ulr'=>'./assets/img/jean21.jpg',
                'quantity'=>30
            ],
            // sp jean 2.2
            [
                'product_id'=>18,
                'size'=>1,
                'color'=>'Nâu nơ',
                'price'=>210000,
                'img_ulr'=>'./assets/img/jean22.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>18,
                'size'=>2,
                'color'=>'Nâu nơ',
                'price'=>210000,
                'img_ulr'=>'./assets/img/jean22.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>18,
                'size'=>3,
                'color'=>'Nâu nơ',
                'price'=>210000,
                'img_ulr'=>'./assets/img/jean22.jpg',
                'quantity'=>30
            ],
            //  sp jean 3.1
            [
                'product_id'=>19,
                'size'=>1,
                'color'=>'Xanh nhạt',
                'price'=>230000,
                'img_ulr'=>'./assets/img/jean31.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>19,
                'size'=>2,
                'color'=>'Xanh nhạt',
                'price'=>230000,
                'img_ulr'=>'./assets/img/jean31.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>19,
                'size'=>3,
                'color'=>'Xanh nhạt',
                'price'=>230000,
                'img_ulr'=>'./assets/img/jean31.jpg',
                'quantity'=>30
            ],
            // sp jean 3.2
            [
                'product_id'=>19,
                'size'=>1,
                'color'=>'Xám',
                'price'=>230000,
                'img_ulr'=>'./assets/img/jean32.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>19,
                'size'=>2,
                'color'=>'Xám',
                'price'=>230000,
                'img_ulr'=>'./assets/img/jean32.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>19,
                'size'=>3,
                'color'=>'Xám',
                'price'=>23000,
                'img_ulr'=>'./assets/img/jean32.jpg',
                'quantity'=>30
            ],
            // sp jean 4.1
            [
                'product_id'=>20,
                'size'=>1,
                'color'=>'Đen',
                'price'=>259000,
                'img_ulr'=>'./assets/img/jean41.jpg',
                'quantity'=>30
            ],
            [
                'product_id'=>20,
                'size'=>2,
                'color'=>'Đen',
                'price'=>259000,
                'img_ulr'=>'./assets/img/jean41.jpg',
                'quantity'=>30
            ],

            [
                'product_id'=>20,
                'size'=>3,
                'color'=>'Đen',
                'price'=>259000,
                'img_ulr'=>'./assets/img/jean41.jpg',
                'quantity'=>30
            ],

            [
                'product_id'=>20,
                'size'=>4,
                'color'=>'Đen',
                'price'=>259000,
                'img_ulr'=>'./assets/img/jean41.jpg',
                'quantity'=>30
            ],
            // sp jean 4.2
            [
                'product_id'=>20,
                'size'=>1,
                'color'=>'Kem',
                'price'=>240000,
                'img_ulr'=>'./assets/img/jean42.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>20,
                'size'=>2,
                'color'=>'Kem',
                'price'=>240000,
                'img_ulr'=>'./assets/img/jean42.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>20,
                'size'=>3,
                'color'=>'Kem',
                'price'=>240000,
                'img_ulr'=>'./assets/img/jean42.jpg',
                'quantity'=>30
            ],
            // sp jean 5.1
            [
                'product_id'=>21,
                'size'=>1,
                'color'=>'Trắng vẽ ngựa',
                'price'=>175000,
                'img_ulr'=>'./assets/img/jean51.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>21,
                'size'=>2,
                'color'=>'Trắng vẽ ngựa',
                'price'=>175000,
                'img_ulr'=>'./assets/img/jean51.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>21,
                'size'=>3,
                'color'=>'Trắng vẽ ngựa',
                'price'=>175000,
                'img_ulr'=>'./assets/img/jean51.jpg',
                'quantity'=>30
            ],
            // sp jean 5.2
            [
                'product_id'=>21,
                'size'=>1,
                'color'=>'Trắng trơn',
                'price'=>186000,
                'img_ulr'=>'./assets/img/jean52.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>21,
                'size'=>2,
                'color'=>'Trắng trơn',
                'price'=>186000,
                'img_ulr'=>'./assets/img/jean52.jpg',
                'quantity'=>30
            ],
             [
                'product_id'=>21,
                'size'=>3,
                'color'=>'Trắng trơn',
                'price'=>186000,
                'img_ulr'=>'./assets/img/jean52.jpg',
                'quantity'=>30
            ],

        ]);
    }
}
