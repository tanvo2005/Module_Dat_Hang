<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $manager = DB::table('users')->where('id', 1)->first();
        $customer = DB::table('users')->where('id', 2)->first();

        if (!$manager || !$customer) {
            throw new RuntimeException('Thieu user mau de tao don hang.');
        }

        $firstVariant = DB::table('product_variants')
            ->where('product_id', 2)
            ->where('size', 1)
            ->orderBy('variant_id')
            ->first();

        $secondVariant = DB::table('product_variants')
            ->where('product_id', 17)
            ->where('size', 2)
            ->orderBy('variant_id')
            ->first();

        if (!$firstVariant || !$secondVariant) {
            throw new RuntimeException('Thieu product variant mau de tao order.');
        }

        $shippingFee = 40000;
        $subtotal = $firstVariant->price + ($secondVariant->price * 2);
        $total = $subtotal + $shippingFee;
        $now = now();

        DB::table('orders')->updateOrInsert(
            ['order_id' => 1],
            [
                'user_id' => $customer->id,
                'orderdate' => now()->toDateString(),
                'status' => 0,
                'shippingaddress' => $customer->address ?? '123 Duong Mau, Quan 1, TP.HCM',
                'totalamount' => $total,
                'update_by' => $manager->id,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('order_details')->upsert([
            [
                'orderdetail_id' => 1,
                'order_id' => 1,
                'variant_id' => $firstVariant->variant_id,
                'size' => $firstVariant->size,
                'quantity' => 1,
                'unitprice' => $firstVariant->price,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'orderdetail_id' => 2,
                'order_id' => 1,
                'variant_id' => $secondVariant->variant_id,
                'size' => $secondVariant->size,
                'quantity' => 2,
                'unitprice' => $secondVariant->price,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ], ['orderdetail_id'], [
            'order_id',
            'variant_id',
            'size',
            'quantity',
            'unitprice',
            'updated_at',
        ]);
    }
}
