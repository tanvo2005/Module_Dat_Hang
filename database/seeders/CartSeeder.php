<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = DB::table('users')->where('id', 2)->first();

        if (!$customer) {
            throw new RuntimeException('Khong tim thay user mau de tao gio hang.');
        }

        $firstVariant = DB::table('product_variants')
            ->where('product_id', 1)
            ->where('size', 2)
            ->orderBy('variant_id')
            ->first();

        $secondVariant = DB::table('product_variants')
            ->where('product_id', 11)
            ->where('size', 1)
            ->orderBy('variant_id')
            ->first();

        if (!$firstVariant || !$secondVariant) {
            throw new RuntimeException('Khong tim thay product variant mau de tao cart.');
        }

        $now = now();

        DB::table('carts')->updateOrInsert(
            ['cart_id' => 1],
            [
                'user_id' => $customer->id,
                'status' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );

        DB::table('cart_details')->upsert([
            [
                'cartdetail_id' => 1,
                'cart_id' => 1,
                'variant_id' => $firstVariant->variant_id,
                'size' => $firstVariant->size,
                'quantity' => 1,
                'unitprice' => $firstVariant->price,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'cartdetail_id' => 2,
                'cart_id' => 1,
                'variant_id' => $secondVariant->variant_id,
                'size' => $secondVariant->size,
                'quantity' => 2,
                'unitprice' => $secondVariant->price,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ], ['cartdetail_id'], [
            'cart_id',
            'variant_id',
            'size',
            'quantity',
            'unitprice',
            'updated_at',
        ]);
    }
}
