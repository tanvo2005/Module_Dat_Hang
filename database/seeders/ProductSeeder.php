<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                // id 1 đầm
                'productname'=>'ĐẦM CHẤM BI DỰ TIỆC TAY CÁNH TIÊN CÚP NGỰC DÁNG NGẮN TẦNG XOÈ PHỐI LƯỚI QUYẾN RŨ',
                'description'=>'Thiết kế nhẹ nhàng, ngọt ngào,là lựa chọn hoàn hảo cho những buổi dạo phố hay hẹn hò cuối tuần.',
                'category_id'=> 1,
                'created_by'=> 1,
                'update_by'=> 1
            ],
            [
                //id 2 đầm
                'productname'=>'Đầm lụa Yếm dáng dài ko dây kéo, lụa cao cấp Tô Châu',
                'description'=>'Chất liệu lụa cao cấp, sản phẩm có độ bóng, mềm mại và thoáng mát, giúp người mặc cảm thấy thoải mái và sang trọng.',
                'category_id'=> 1,
                'created_by'=> 1,
                'update_by'=> 1
            ],
            [
                //id 3 đầm
                'productname'=>'Đầm Dáng Dài 2 Dây Ren Hoa 3D Phối Lưới Dáng Xoè Trang Nhã ',
                'description'=>'Đầm Dáng Dài 2 Dây Ren Hoa 3D Phối Lưới Dáng Xoè là mẫu được YM thiết kế và chụp mẫu thực tế. Form chuẩn, tôn dáng, chất vải dày mịn giúp đứng form sang trọng. Outfit phù hợp đi làm, đi chơi hay dự tiệc đều thanh lịch và cuốn hút',
                'category_id'=> 1,
                'created_by'=> 1,
                'update_by'=> 1
            ],
            [
                //id 4 đầm
                'productname'=>'Đầm váy nữ basic BIGSIZE Banamo Fashion cổ sơ mi cài cúc chiết eo lưng chun cộc tay nhiều màu',
                'description'=>'phù hợp cuối tuần dạo phố cùng người yêu',
                'category_id'=> 1,
                'created_by'=> 1,
                'update_by'=> 1
            ],
            [
                //id 5 đầm
                'productname'=>'Đầm cổ yếm bí cột dây hở lưng dáng phồng tơ phối ren kim sa lấp lánh dáng ngắn xoè , có quần bảo hộ',
                'description'=>'Thiết kế yếm cổ sang trọng, điểm nhấn cột dây hở lưng quyến rũ',
                'category_id'=> 1,
                'created_by'=> 1,
                'update_by'=> 1
            ],

            // váy
            [
                //id 6 vay
                'productname'=>'Váy bồng xoè dáng bí thường mặc dáng ngắn đính nơ tay bồng kèm quần bảo hộ',
                'description'=>'Thiết kế bồng xoè dáng bí giúp che khuyết điểm vòng 2, tôn dáng thon gọn',
                'category_id'=> 2,
                'created_by'=> 1,
                'update_by'=> 1
            ],

            [
                //id 7 váy
                'productname'=>'Váy babydoll dáng suông dài tay Dilyshop thiết kế tay bồng tiểu chất kaki hàn mềm mịn',
                'description'=>'Váy có thể mặc trong nhiều dịp, từ đi chơi, dạo phố đến dự tiệc, hẹn hò',
                'category_id'=> 2,
                'created_by'=> 1,
                'update_by'=> 1
            ],

            [
                //id8 váy
                'productname'=>'Váy Tiểu Thư Tay Bồng Thắt Eo Đầm Dự Tiệc Dáng Chữ A',
                'description'=>'Váy xinh thiết kế trẻ trung, nhẹ nhàng nàng có thể mặc trong rất nhiều hoàn cảnh nhé',
                'category_id'=> 2,
                'created_by'=> 1,
                'update_by'=> 1
            ],


            [
                // id 9 vay
                'productname'=>'Váy Nữ Woru Thiết Kế Cổ Tròn Tay Bồng, Đầm Ngắn Dáng Xòe Hai Tầng Vintage',
                'description'=>'Thiết kế tay bồng nhẹ, tạo hiệu ứng vai thon và cực hack dáng nữ tính',
                'category_id'=> 2,
                'created_by'=> 1,
                'update_by'=> 1
            ],


            [
                //id 10 váy
                'productname'=>'Váy Ren Hoa Timi Dáng Xòe Bồng Bềnh, Đầm Nữ Kiểu Dáng 2 Dây Phối Trễ Vai Sang Chảnh',
                'description'=>'Chiếc váy Timi là lựa chọn không thể thiếu cho nàng yêu phong cách công chúa hiện đại.',
                'category_id'=> 2,
                'created_by'=> 1,
                'update_by'=> 1
            ],

            // áo thun
            [
                // id 11
                'productname'=>'Áo Thun Trơn 100% Cotton Comfitex màu sắc Fabric 240Gsm Form Oversize ',
                'description'=>'Kiểu dáng: Dáng rộng - Dáng áo rộng rãi',
                'category_id'=> 3,
                'created_by'=> 1,
                'update_by'=> 1
            ],
            [
                //id 12
                'productname'=>'Áo thun trơn form ôm - áo baby tee ôm body chất liệu thun gân co giãn 4 chiều',
                'description'=>'Mỗi màu áo sẽ có độ dày mỏng khác nhau nhưng vẫn đều là chất thun gân',
                'category_id'=> 3,
                'created_by'=> 1,
                'update_by'=> 1
            ],
            [
                // id 13
                'productname'=>'Áo thun Hello Kitty Ume unisex tay lỡ nữ form rộng',
                'description'=>'Với chất liệu thun cotton dày mịn được lựa chọn kĩ lưỡng để phù hợp với mọi hoàn cảnh.  ',
                'category_id'=> 3,
                'created_by'=> 1,
                'update_by'=> 1
            ],
            [
                //id 14
                'productname'=>'Áo Thun Trơn 100% Cotton Comfitex chó con Fabric 240Gsm Form Oversize',
                'description'=>'Sản phẩm từng đường kim mũi chỉ đều gia công thủ công vô cùng chắc chắn và khéo léo từ những người thợ lành nghề nên đảm bảo sản phẩm chỉnh chu nhất khi đến tay khách hàng.',
                'category_id'=> 3,
                'created_by'=> 1,
                'update_by'=> 1
            ],
            [
                // id 15
                'productname'=>'Áo Thun Nữ Cổ Tròn Sọc Dệt Kim Thêu Hình Ngựa Phong Cách Trẻ Trung Hàn Quốc',
                'description'=>'Phong cách: Thanh lịch, Hàn quốc, Dễ thương',
                'category_id'=> 3,
                'created_by'=> 1,
                'update_by'=> 1
            ],
            [
                // id 16
                'productname'=>'Áo Thun Nữ Dài Tay JUSTDUN A8 Cổ Tròn, Cotton Lông Mịn Dày Dặn, Siêu Co Giãn Mềm Mại, Tôn Dáng',
                'description'=>'Thiết kế: Dáng ôm body vừa vặn, cổ tròn, tay dài, dễ phối với quần jean, chân váy hoặc khoác ngoài.',
                'category_id'=> 3,
                'created_by'=> 1,
                'update_by'=> 1
            ],
            // quần jean
            [
                // id 17
                'productname'=>'Quần jean bò ống suông rộng nữ xuông jeans cạp cao phong cách style Hàn Quốc',
                'description'=>' Sử dụng đi học, đi làm, đi chơi,...',
                'category_id'=> 4,
                'created_by'=> 1,
                'update_by'=> 1
            ],
            [
                // id 18
                'productname'=>'Quần jeans xuông ống rộng siêu hót cạp cao',
                'description'=>'Đặc điểm nổi bật nhất: được làm từ chất liệu vải kaki đẹp , không xù , không co rút , fom dáng chuẩn ko chỉ thừa ',
                'category_id'=> 4,
                'created_by'=> 1,
                'update_by'=> 1
            ],
            [
                // id 19
                'productname'=>'Quần Ống Loe Jean nữ Lưng cao vải rin bò màu bụi xanh nhạt phủ dơ dáng đứng suông bigsize cạp cao MIAA co giãn 4 chiều',
                'description'=>'mang lại vẻ trẻ trung, năng động, thoải mái cho bạn nữ trong cả ngày hè và ngày đông.',
                'category_id'=> 4,
                'created_by'=> 1,
                'update_by'=> 1
            ],
            [
                // id 20
                'productname'=>'Quần KAKI Jeans Ống Rộng Ver 1 WIDE LEG Calem.Club tôn dáng, Quần Jean Nữ Ống Rộng Lưng Cao nhiều màu tôn dáng',
                'description'=>'Chất liệu: kaki dày dặn, đứng form quần khi mặc, không thô ráp, không co giãn',
                'category_id'=> 4,
                'created_by'=> 1,
                'update_by'=> 1
            ],
            [
                // id 21
                'productname'=>'Quần jeans trắng ống suông thêu ngựa, jeans nữ cạp cao form suông rộng basic',
                'description'=>'Phong cách: Basic dễ phối, phù hợp đi học, đi làm, đi chơi, mặc nhà đều đẹp.',
                'category_id'=> 4,
                'created_by'=> 1,
                'update_by'=> 1
            ],



        ]);
    }
}
