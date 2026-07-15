<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/test', function () {
    return view('welcome');
});
Route::get('/abc', function () {
    return view('students.index');
});
// bài 3
//Lệnh để gọi liên kết trang 
Route::get('/students', [StudentController::class,'index']);
Route::get('/students-db', [StudentController::class, 'indexDb']);