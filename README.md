# ModuleDatHang - E-commerce Shoe Store Platform

[![Laravel](https://img.shields.io/badge/Laravel-12.0-FF2D20?style=flat-square&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=flat-square&logo=php)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=flat-square&logo=mysql)](https://mysql.com)
[![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)](LICENSE)

Nền tảng thương mại điện tử chuyên về bán giày dép được xây dựng bằng Laravel 12.0. Hệ thống cho phép khách hàng duyệt danh sách sản phẩm, quản lý giỏ hàng, đặt hàng và người quản lý có thể duyệt, xử lý các đơn hàng.

## Mục lục

- [Demo](#demo)
- [Tech Stack](#tech-stack)
- [Tính năng](#tính-năng)
- [Cấu trúc dự án](#cấu-trúc-dự-án)
- [Cơ sở dữ liệu](#cơ-sở-dữ-liệu)
- [API và Routes](#api-và-routes)
- [Xác thực](#xác-thực)
- [Phân quyền](#phân-quyền)
- [Cài đặt](#cài-đặt)
- [Chạy ứng dụng](#chạy-ứng-dụng)
- [Chạy Tests](#chạy-tests)
- [Build Production](#build-production)
- [Triển khai](#triển-khai)
- [Bảo mật](#bảo-mật)
- [Performance](#performance)
- [Packages chính](#packages-chính)
- [Tiêu chuẩn code](#tiêu-chuẩn-code)

---

## Demo

> Demo chưa được triển khai.

---

## Tech Stack

| Công nghệ           | Phiên bản | Mục đích                |
| ------------------- | --------- | ----------------------- |
| Laravel Framework   | 12.0      | Framework web chính     |
| PHP                 | 8.2+      | Ngôn ngữ lập trình      |
| MySQL               | 5.7+      | Cơ sở dữ liệu chính     |
| Composer            | Latest    | Trình quản lý gói PHP   |
| Node.js             | Latest    | Runtime cho build tools |
| Vite                | 7.0.7     | Build tool frontend     |
| Tailwind CSS        | 4.0.0     | Framework CSS           |
| Axios               | 1.11.0    | HTTP client             |
| Laravel Vite Plugin | 2.0.0     | Plugin tích hợp Vite    |
| FakerPHP            | 1.23      | Tạo dữ liệu giả         |
| PHPUnit             | 11.5.3    | Framework testing       |

---

## Tính năng

- **Danh sách sản phẩm**: Hiển thị toàn bộ sản phẩm giày dép với phân trang
- **Danh mục sản phẩm**: Lọc sản phẩm theo danh mục khác nhau
- **Chi tiết sản phẩm**: Xem thông tin chi tiết, các biến thể (kích cỡ, màu sắc) của sản phẩm
- **Giỏ hàng**: Thêm, cập nhật số lượng, xóa sản phẩm khỏi giỏ hàng
- **Đặt hàng**: Quá trình checkout với xác nhận địa chỉ giao hàng
- **Xác thực người dùng**: Đăng ký, đăng nhập, đăng xuất
- **Quản lý tài khoản**: Cập nhật thông tin địa chỉ, điện thoại
- **Lịch sử đơn hàng**: Xem các đơn hàng đã đặt và chi tiết từng đơn
- **Quản lý đơn hàng**: Người quản lý có thể xem danh sách tất cả đơn hàng và cập nhật trạng thái
- **Phân quyền theo vai trò**: Admin, Manager, Customer có quyền hạn khác nhau
- **Kiểm tra tồn kho**: Kiểm tra số lượng sản phẩm có sẵn trước khi cho phép đặt hàng

---

## Cấu trúc dự án

### Thư mục chính

```
app/
├── Http/
│   ├── Controllers/          # Các controller xử lý logic
│   │   ├── AuthController.php
│   │   ├── CartController.php
│   │   ├── DatHangController.php
│   │   ├── ManagerController.php
│   │   ├── ProductController.php
│   │   └── UserController.php
│   ├── Middleware/           # Middleware kiểm soát truy cập
│   │   └── ManagerMiddleware.php
│   └── Requests/             # Form Request validation
│       ├── PostRequest.php
│       └── RegisterRequest.php
├── Models/                   # Eloquent models
│   ├── Cart.php
│   ├── CartDetail.php
│   ├── Category.php
│   ├── Order.php
│   ├── OrderDetail.php
│   ├── Product.php
│   ├── ProductVariant.php
│   ├── Role.php
│   ├── User.php
│   └── UserRole.php
└── Providers/                # Service providers
    ├── AppServiceProvider.php
    └── CartServiceProvider.php
```

### Database

```
database/
├── migrations/               # Schema migrations
├── seeders/                  # Database seeders
│   ├── RoleSeeder.php
│   ├── CategorySeeder.php
│   ├── UserSeeder.php
│   ├── ProductSeeder.php
│   ├── ProductVariantsSeeder.php
│   └── ...
└── factories/                # Model factories
    └── UserFactory.php
```

### Frontend

```
resources/
├── views/                    # Blade templates
│   ├── Home/                 # Trang chủ
│   │   ├── index.blade.php
│   │   ├── layout.blade.php
│   │   └── main.blade.php
│   ├── Product/              # Trang sản phẩm
│   │   ├── cartDetail.blade.php
│   │   ├── productDetail.blade.php
│   │   ├── payBill.blade.php
│   │   ├── myOrder.blade.php
│   │   ├── myOrderDetail.blade.php
│   │   ├── adress.blade.php
│   │   └── orderSuccessfully.blade.php
│   ├── Auth/                 # Trang xác thực
│   │   ├── login.blade.php
│   │   └── register.blade.php
│   └── Manager/              # Trang quản lý
│       ├── duyetDon.blade.php
│       └── layout.blade.php
├── css/                      # Tailwind CSS
├── js/                       # JavaScript
└── assets/                   # Hình ảnh, fonts
```

### Configuration

```
config/
├── app.php                   # Cấu hình ứng dụng
├── auth.php                  # Cấu hình xác thực
├── cache.php                 # Cấu hình cache
├── database.php              # Cấu hình database
├── filesystems.php           # Cấu hình storage
├── logging.php               # Cấu hình logging
├── mail.php                  # Cấu hình email
└── queue.php                 # Cấu hình queue
```

### Routing

```
routes/
├── web.php                   # Web routes
└── console.php               # Artisan commands
```

### Testing

```
tests/
├── Feature/                  # Feature tests
├── Unit/                     # Unit tests
└── TestCase.php              # Base test case
```

---

## Cơ sở dữ liệu

### Danh sách bảng

| Bảng                    | Mục đích                                                  |
| ----------------------- | --------------------------------------------------------- |
| `users`                 | Lưu thông tin người dùng (khách hàng, quản lý)            |
| `roles`                 | Lưu các vai trò trong hệ thống (admin, manager, customer) |
| `userroles`             | Liên kết người dùng với vai trò (bảng trung gian)         |
| `categories`            | Danh mục sản phẩm giày                                    |
| `products`              | Sản phẩm (áo, giày, v.v.)                                 |
| `product_variants`      | Các biến thể của sản phẩm (kích cỡ, màu sắc, giá)         |
| `carts`                 | Giỏ hàng của người dùng                                   |
| `cart_details`          | Chi tiết sản phẩm trong giỏ hàng                          |
| `orders`                | Đơn hàng đã đặt                                           |
| `order_details`         | Chi tiết từng sản phẩm trong đơn hàng                     |
| `password_reset_tokens` | Token reset mật khẩu                                      |
| `sessions`              | Session người dùng                                        |
| `cache`                 | Cache data                                                |
| `jobs`                  | Queue jobs                                                |
| `migrations`            | Migration history                                         |

### Mối quan hệ chính

- **User** → **Roles**: Many to Many (qua bảng userroles)
- **User** → **Cart**: One to One (cả một giỏ hàng active)
- **User** → **Orders**: One to Many
- **Cart** → **CartDetails**: One to Many
- **CartDetail** → **ProductVariant**: Many to One
- **Product** → **Category**: Many to One
- **Product** → **ProductVariants**: One to Many
- **Order** → **OrderDetails**: One to Many
- **OrderDetail** → **ProductVariant**: Many to One

---

## API và Routes

### Public Routes (Không cần xác thực)

| Method | Endpoint         | Mô tả                          | Middleware |
| ------ | ---------------- | ------------------------------ | ---------- |
| GET    | `/`              | Trang chủ - Danh sách sản phẩm | -          |
| GET    | `/danh-muc/{id}` | Sản phẩm theo danh mục         | -          |
| GET    | `/san-pham/{id}` | Chi tiết sản phẩm              | -          |
| GET    | `/login`         | Form đăng nhập                 | -          |
| POST   | `/login`         | Xử lý đăng nhập                | -          |
| GET    | `/register`      | Form đăng ký                   | -          |
| POST   | `/register`      | Xử lý đăng ký                  | -          |

### Authenticated Routes (Cần đăng nhập)

| Method | Endpoint                      | Mô tả                      | Middleware |
| ------ | ----------------------------- | -------------------------- | ---------- |
| GET    | `/logout`                     | Đăng xuất                  | auth       |
| GET    | `/address/edit`               | Form chỉnh sửa địa chỉ     | auth       |
| PATCH  | `/address/update`             | Cập nhật địa chỉ           | auth       |
| GET    | `/cart`                       | Xem giỏ hàng               | auth       |
| POST   | `/cart/add`                   | Thêm sản phẩm vào giỏ      | auth       |
| PATCH  | `/cart/update/{cartDetailId}` | Cập nhật số lượng          | auth       |
| DELETE | `/cart/remove/{cartDetailId}` | Xóa sản phẩm khỏi giỏ      | auth       |
| GET    | `/checkout`                   | Trang thanh toán           | auth       |
| POST   | `/checkout`                   | Xử lý đặt hàng             | auth       |
| GET    | `/order/success`              | Trang thành công           | auth       |
| GET    | `/myorder`                    | Danh sách đơn hàng của tôi | auth       |
| GET    | `/myorderdetail/{id}`         | Chi tiết đơn hàng          | auth       |

### Manager Routes (Cần vai trò Manager)

| Method | Endpoint                      | Mô tả                     | Middleware           |
| ------ | ----------------------------- | ------------------------- | -------------------- |
| GET    | `/manager/orders`             | Danh sách tất cả đơn hàng | auth, kiemTraManager |
| PATCH  | `/manager/orders/{id}/update` | Cập nhật trạng thái đơn   | auth, kiemTraManager |

---

## Xác thực

### Loại xác thực

Ứng dụng sử dụng **Session-based Authentication**:

- **Cơ chế**: Sử dụng HTTP session lưu trữ trên cơ sở dữ liệu
- **Driver**: `database` (cấu hình trong `.env`: `SESSION_DRIVER=database`)
- **Thời hạn**: 120 phút (cấu hình trong `.env`: `SESSION_LIFETIME=120`)

### Quy trình xác thực

1. **Đăng ký**:
    - Kiểm tra validation qua `RegisterRequest`
    - Mã hóa mật khẩu bằng `bcrypt`
    - Tạo người dùng mới
    - Gán vai trò mặc định là `customer`
    - Tự động đăng nhập

2. **Đăng nhập**:
    - Kiểm tra validation qua `PostRequest`
    - Xác thực email và password
    - Nếu là manager, chuyển hướng đến trang quản lý
    - Nếu là customer, chuyển hướng về trang chủ

3. **Đăng xuất**: Hủy session và xóa token

### Validation Rules

**RegisterRequest**:

- `name`: Bắt buộc, chuỗi
- `email`: Bắt buộc, email, duy nhất trong bảng users
- `password`: Bắt buộc, chuỗi, tối thiểu 6 ký tự, phải xác nhận

**PostRequest**:

- `email`: Bắt buộc, email, tồn tại trong bảng users
- `password`: Bắt buộc, chuỗi, tối thiểu 6 ký tự

---

## Phân quyền

### Vai trò trong hệ thống

1. **admin**: Vai trò tối cao (chưa triển khai chức năng cụ thể)
2. **manager**: Quản lý đơn hàng, cập nhật trạng thái
3. **customer**: Khách hàng, có thể mua hàng

### Cơ chế phân quyền

- **Middleware**: `ManagerMiddleware` kiểm tra quyền manager
- **Kiểm tra vai trò trong Controller**: Sử dụng `Auth::user()->roles()->where('rolename', 'manager')->exists()`

### Quyền của từng vai trò

| Chức năng               | Admin | Manager | Customer |
| ----------------------- | ----- | ------- | -------- |
| Duyệt sản phẩm          | ✓     | ✓       | ✓        |
| Mua hàng                | ✓     | ✓       | ✓        |
| Xem đơn hàng của mình   | ✓     | ✓       | ✓        |
| Xem tất cả đơn hàng     | ✓     | ✓       | ✗        |
| Cập nhật trạng thái đơn | ✓     | ✓       | ✗        |

---

## Cài đặt

### Yêu cầu hệ thống

- PHP 8.2 trở lên
- Composer
- MySQL 5.7 trở lên (hoặc SQLite)
- Node.js 18+
- npm hoặc yarn

### Các bước cài đặt

#### 1. Clone repository

```bash
git clone <repository-url>
cd ModuleDatHang
```

#### 2. Cài đặt dependencies PHP

```bash
composer install
```

#### 3. Sao chép file .env

```bash
cp .env.example .env
```

#### 4. Tạo application key

```bash
php artisan key:generate
```

#### 5. Cấu hình cơ sở dữ liệu

Chỉnh sửa file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cua_hang_giay_dep
DB_USERNAME=root
DB_PASSWORD=
```

Hoặc nếu sử dụng SQLite:

```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

#### 6. Chạy migrations

```bash
php artisan migrate
```

#### 7. Seed dữ liệu ban đầu

```bash
php artisan db:seed
```

#### 8. Cài đặt dependencies Node.js

```bash
npm install
```

#### 9. Build frontend assets

```bash
npm run build
```

Hoặc cho development:

```bash
npm run dev
```

---

## Chạy ứng dụng

### Development Server

Chạy tất cả services cùng lúc:

```bash
composer run dev
```

Hoặc chạy riêng từng service:

**Terminal 1 - Laravel Server**:

```bash
php artisan serve
```

**Terminal 2 - Vite Dev Server**:

```bash
npm run dev
```

**Terminal 3 - Queue Worker** (tuỳ chọn):

```bash
php artisan queue:listen --tries=1
```

**Terminal 4 - Pail Logs** (tuỳ chọn):

```bash
php artisan pail --timeout=0
```

Sau đó truy cập ứng dụng tại: `http://localhost:8000`

### Tài khoản mặc định (từ seeder)

**Manager**:

- Email: `manager@example.com`
- Mật khẩu: `12345678`

**Customer**:

- Email: `customer@example.com`
- Mật khẩu: `12345678`

---

## Chạy Tests

### Chạy tất cả tests

```bash
composer test
```

hoặc

```bash
php artisan test
```

### Chạy từng loại test

**Feature tests**:

```bash
php artisan test tests/Feature
```

**Unit tests**:

```bash
php artisan test tests/Unit
```

### Cấu hình testing

File `phpunit.xml` định nghĩa cấu hình:

- Database: SQLite in-memory
- Cache: Array driver
- Mail: Array driver
- Session: Array driver

---

## Build Production

### Tối ưu hóa ứng dụng

```bash
composer install --no-dev
```

```bash
npm run build
```

```bash
php artisan optimize
```

### Clear caches

```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### Kiểm tra configuration

```bash
php artisan config:cache
```

---

## Triển khai

### Triển khai trên server Linux/Apache

#### 1. Tải code lên server

```bash
git clone <repository-url> /var/www/shop
cd /var/www/shop
```

#### 2. Cài đặt dependencies

```bash
composer install --no-dev
npm install --production
npm run build
```

#### 3. Cấu hình .env

Chỉnh sửa file `.env`:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_DATABASE=shop_db
DB_USERNAME=shop_user
DB_PASSWORD=strong_password
```

#### 4. Khởi tạo cơ sở dữ liệu

```bash
php artisan migrate --force
php artisan db:seed --force
```

#### 5. Cấu hình Apache VirtualHost

```apache
<VirtualHost *:80>
    ServerName yourdomain.com
    ServerAlias www.yourdomain.com

    DocumentRoot /var/www/shop/public

    <Directory /var/www/shop/public>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

    <Directory /var/www/shop>
        AllowOverride None
        Require all denied
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/shop_error.log
    CustomLog ${APACHE_LOG_DIR}/shop_access.log combined
</VirtualHost>
```

#### 6. Cấu hình file permissions

```bash
chown -R www-data:www-data /var/www/shop
chmod -R 755 /var/www/shop
chmod -R 775 /var/www/shop/storage
chmod -R 775 /var/www/shop/bootstrap/cache
```

#### 7. Bật mod_rewrite

```bash
a2enmod rewrite
a2ensite shop
systemctl restart apache2
```

#### 8. Cấu hình SSL (Let's Encrypt)

```bash
certbot --apache -d yourdomain.com
```

#### 9. Cấu hình Queue (tuỳ chọn)

Nếu sử dụng Laravel Queue:

```bash
php artisan queue:work --daemon
```

Hoặc cài đặt supervisor:

```ini
[program:laravel-queue]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/shop/artisan queue:work
autostart=true
autorestart=true
user=www-data
numprocs=4
```

---

## Bảo mật

### Các biện pháp bảo mật được triển khai

#### 1. CSRF Protection

- Tất cả form POST, PUT, PATCH, DELETE đều có CSRF token
- Token được sinh ngẫu nhiên cho mỗi session
- File config: `config/session.php`

#### 2. SQL Injection Prevention

- Sử dụng Eloquent ORM với prepared statements
- Không sử dụng raw SQL queries trực tiếp

#### 3. XSS Prevention

- Blade templates tự động escape output
- Sử dụng `{{ }}` thay vì `{{{ }}}`

#### 4. Authentication

- Mật khẩu mã hóa bcrypt
- Session-based authentication
- Session timeout: 120 phút

#### 5. Authorization

- Middleware kiểm tra vai trò
- Policy-based authorization (có thể mở rộng)
- Row-level authorization (kiểm tra quyền sở hữu)

#### 6. Input Validation

- Form Request validation
- Blade template validation errors
- Type hinting trong controller

#### 7. Database Security

- Foreign key constraints
- Transaction support
- Database query logging (development)

### Cách tăng cường bảo mật

1. **Cập nhật Dependencies**:

```bash
composer update
npm update
```

2. **Kiểm tra Vulnerabilities**:

```bash
composer audit
npm audit
```

3. **Cấu hình Security Headers**:
    - Thêm `Strict-Transport-Security`
    - Thêm `X-Content-Type-Options`
    - Thêm `X-Frame-Options`

4. **Enable HTTPS**: Sử dụng SSL/TLS certificate

5. **Rate Limiting**: Thêm rate limiting cho login

6. **Two-Factor Authentication**: Có thể mở rộng thêm

---

## Packages chính

| Package              | Version | Mục đích                       |
| -------------------- | ------- | ------------------------------ |
| laravel/framework    | 12.0    | Framework chính                |
| laravel/tinker       | 2.10.1  | REPL console                   |
| laravel/pail         | 1.2.2   | Real-time log viewer           |
| laravel/pint         | 1.24    | Code style fixer               |
| laravel/sail         | 1.41    | Docker development environment |
| fakerphp/faker       | 1.23    | Fake data generation           |
| mockery/mockery      | 1.6     | Mocking library                |
| nunomaduro/collision | 8.6     | Error handling                 |
| phpunit/phpunit      | 11.5.3  | Testing framework              |
| tailwindcss          | 4.0.0   | CSS framework                  |
| axios                | 1.11.0  | HTTP client                    |
| laravel-vite-plugin  | 2.0.0   | Vite integration               |
| vite                 | 7.0.7   | Build tool                     |

---

## Tiêu chuẩn code

### Quy tắc chung

1. **PHP Standards**: PSR-12 Code Style Standard
2. **Laravel Conventions**: Tuân theo Laravel framework conventions
3. **Naming**:
    - Controllers: `PascalCase` với hậu tố `Controller`
    - Models: `PascalCase` số ít
    - Methods: `camelCase`
    - Variables: `camelCase`
    - Database columns: `snake_case`

### Cấu trúc Model

```php
class Product extends Model
{
    // Constants
    const STATUS_ACTIVE = 1;

    // Properties
    protected $fillable = [];

    // Relationships
    public function category() {}

    // Accessors & Mutators (Laravel 11+)
    protected function name(): Attribute {}

    // Local Scopes
    public function scopeActive($query) {}

    // Methods
    public function getPrice() {}
}
```

### Cấu trúc Controller

```php
class ProductController extends Controller
{
    // Middleware
    public function __construct() {}

    // List
    public function index() {}

    // Show
    public function show($id) {}

    // Create form
    public function create() {}

    // Store
    public function store(Request $request) {}

    // Edit form
    public function edit($id) {}

    // Update
    public function update(Request $request, $id) {}

    // Delete
    public function destroy($id) {}
}
```

### Validation

- Sử dụng Form Requests để tập trung validation logic
- Implement `authorize()` method
- Return validation rules mảng

### Error Handling

- Sử dụng try-catch cho database transactions
- Rollback khi lỗi xảy ra
- Return user-friendly error messages

### Comments

- Comment cho public methods
- Comment cho complex logic
- PHPDoc cho parameters và return types

### Testing

- Cấu trúc: Arrange → Act → Assert
- Test names mô tả hành động
- Mock external dependencies

---

## Ghi chú bổ sung

### Biến Service Provider

**CartServiceProvider** chia sẻ biến giỏ hàng global cho layout:

- `$global_cart`: Object giỏ hàng đầy đủ với chi tiết
- `$global_cart_count`: Số lượng sản phẩm trong giỏ

Cấu hình này cho phép hiển thị số lượng giỏ hàng trong header.

### Transaction Handling

Checkout process sử dụng database transaction:

- Tạo đơn hàng
- Tạo chi tiết đơn
- Trừ tồn kho
- Nếu lỗi → Rollback tất cả

### Image Storage

Hình ảnh sản phẩm lưu trong thư mục `public/assets/img/`.

---

**Cập nhật lần cuối**: 18/06/2026
