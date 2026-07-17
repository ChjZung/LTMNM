<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PageController;

// Bài 1: Route đầu tiên kiểm tra Laravel hoạt động
Route::get('/hello', function () {
    return 'Xin chào Laravel 12!';
});

// Bài 2: Hiển thị thời gian hiện tại của hệ thống
Route::get('/time', function () {
    // Dùng helper now() để lấy thời gian hiện tại
    return now()->format('H:i:s d/m/Y');
});

// Bài 2: Route nhận hai tham số và tính tổng
Route::get('/sum/{a}/{b}', function ($a, $b) {

    // Kiểm tra dữ liệu đầu vào phải là số
    if (!is_numeric($a) || !is_numeric($b)) {
        return response('Tham số phải là số nguyên', 400);
    }

    // Trả về kết quả phép cộng
    return (int)$a + (int)$b;
});

// Bài 3: Hiển thị danh sách sinh viên từ mảng
Route::get('/students', [StudentController::class, 'index']);

// Bài 4 & 6: Hiển thị danh sách sinh viên từ CSDL
// Có phân trang, lọc giới tính và sử dụng Blade Component
Route::get('/students/db', [StudentController::class, 'indexDb']);

// Bài 5: Hiển thị đồng thời dữ liệu từ mảng và CSDL để so sánh
Route::get('/students/combined', [StudentController::class, 'combined']);

// Bài 7: tạo trang About
Route::get('/about', [PageController::class, 'about']);

// Bài 8: Hiển thị form thêm sinh viên
Route::get('/students/create', [StudentController::class, 'create']);

// Bài 8: Lưu sinh viên vào CSDL
Route::post('/students', [StudentController::class, 'store']);