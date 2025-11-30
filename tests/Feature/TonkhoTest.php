<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TonkhoTest extends TestCase
{
    use RefreshDatabase;
    //test: Không thể thêm vào giỏ hàng nếu số lượng mua hàng lớn hơn số lượng tồn kho
    
    public function test_ton_kho_khi_them_vao_gio_hang(){
        //user
        $user = User::factory()->create();
        
        //danh mục và sản phẩm
        $category = Category::create(['categoryname' => 'Giay tre em']);
        $product = Product::create([
            'productname' => 'doi giay cua tre em',
            'category_id' => $category->category_id,
            'created_by' => $user->id,
            'update_by' => $user->id,
        ]);

        //biến thể với tồn kho LÀ 5
        $variant = ProductVariant::create([
            'product_id' => $product->product_id,
            'size' => 40,
            'color' => 'do',
            'price' => 100000,
            'quantity' => 5,
        ]);

        //đăng nhập
        $this->actingAs($user);

        //thêm 10 sản phẩm vào giỏ hàng
        $response = $this->post(route('cart.add'), [
            'variant_id' => $variant->variant_id,
            'size' => 40,
            'quantity' => 10,
        ]);

        //kiểm tra
        //Phải chuyển hướng quay lại (redirect back)
        $response->assertRedirect();
        
        //Phải có thông báo lỗi trong session (khớp với controller của bạn)
        $response->assertSessionHas('error', 'Số lượng sản phẩm trong kho không đủ.');

        //Bảng 'cart_details' có thêm bảng ghi mới không cơ sở dữ liệu phải trống
        $this->assertDatabaseCount('cart_details', 0);
    }
}

// php artisan test tests/Feature/TonkhoTest.php
