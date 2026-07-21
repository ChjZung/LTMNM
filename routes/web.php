<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// 1. Route có tham số động
Route::get('/articles/page/{page}', function ($page) {
    return "Trang bài viết số: " . (int)$page;
})->whereNumber('page')->name('articles.page');

// 2. Tham số tuỳ chọn + regex slug
Route::get('/articles/slug/{slug?}', function ($slug = 'khong-co-slug') {
    return "Slug: " . $slug;
})->where('slug', '[a-z0-9-]+');

// 3. Route group với prefix
Route::prefix('admin')->group(function () {
    Route::get('/articles', fn() => 'Quản trị bài viết')
        ->name('admin.articles.index');
});

// BÀI TẬP 02: RESTful Controller
use App\Http\Controllers\ArticleControllerBT2;
Route::resource('bt2/articles', ArticleControllerBT2::class)->names('bt2.articles');

// BÀI TẬP 04 & 05: Blade Components & Forms (CSRF + Validation)
use App\Http\Controllers\ArticleControllerBT5;
Route::resource('bt5/articles', ArticleControllerBT5::class)->names('bt5.articles');

// BÀI TẬP 06: Route Model Binding (Implicit)
use App\Models\Article;
Route::get('/bt6/articles/show/{article}', function (Article $article) {
    return view('bt6.articles.show', compact('article'));
})->name('bt6.articles.show');

// BÀI TẬP 07: Form xoá an toàn bằng Confirm & Method Spoofing
use App\Http\Controllers\ArticleControllerBT7;
Route::resource('bt7/articles', ArticleControllerBT7::class)->names('bt7.articles');

// BÀI TẬP 08: Nâng cấp UI với <x-button> & @push('styles')
Route::get('/bt8/articles/create', fn() => view('bt8.articles.create'))->name('bt8.articles.create');

// BÀI TẬP 09: Tối ưu Named Routes & Breadcrumb Helper
use App\Http\Controllers\ArticleControllerBT9;
Route::resource('bt9/articles', ArticleControllerBT9::class)->names('bt9.articles');

// BÀI TẬP 10: Component & Partial hóa giao diện (<x-card>)
Route::get('/bt10/articles/card', fn() => view('bt10.articles.card'))->name('bt10.articles.card');
