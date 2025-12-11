<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    // HIỂN THỊ TRANG CHỦ (Tất cả sản phẩm)
    public function index()
    {
        $user = Auth::user();
        if ($user && $user->roles()->where('rolename', 'manager')->exists()) {
            return redirect()->route('manager.orders.index');
        }

        $categories = Category::all();

        // Lấy sản phẩm, kèm theo biến thể giá thấp nhất để hiển thị
        $products = Product::with('minPriceVariant')
            ->latest()
            ->paginate(100);

        $category = null;

        // Trả về biến $products
        return view('Home.index', compact('categories', 'products', 'category'));
    }

    // HIỂN THỊ CHI TIẾT SẢN PHẨM
    public function productDetail(string $id)
    {
        // Chú ý: $id ở đây là ID của Product (Sản phẩm cha), không phải Variant
        // Nếu link trang chủ là route('productDetail', $product->id)

        $product = Product::with('variants')->findOrFail($id);

        // Lấy biến thể đầu tiên để hiển thị mặc định
        $currentVariant = $product->variants->first();

        // Nếu sản phẩm chưa có biến thể nào (dữ liệu lỗi), xử lý để không sập web
        if (!$currentVariant) {
            return redirect()->back()->with('error', 'Sản phẩm đang cập nhật.');
        }

        $allVariants = $product->variants;
        $uniqueColors = $allVariants->pluck('color')->unique();

        // Lấy danh sách size thực tế có trong kho
        $availableSizes = $allVariants->pluck('size')->unique()->sort()->values()->toArray();

        $categories = Category::all();

        return view('Product.productDetail', compact(
            'currentVariant',
            'product',
            'allVariants',
            'uniqueColors',
            'availableSizes',
            'categories'
        ));
    }

    // HIỂN THỊ SẢN PHẨM THEO DANH MỤC
    public function show(string $id)
    {
        $categories = Category::all();
        $category = Category::findOrFail($id);
        // Thay vì lấy Variants, ta lấy Products thuộc danh mục đó
        // Để đồng bộ với hàm index()
        $products = Product::where('category_id', $id)
            ->with('minPriceVariant') // Kèm biến thể đại diện
            ->latest()
            ->paginate(12);

        // Trả về biến $products (thay vì $variants)
        return view('Home.index', compact('categories', 'products', 'category'));
    }
}
