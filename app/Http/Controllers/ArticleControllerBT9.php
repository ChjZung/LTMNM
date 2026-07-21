<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleControllerBT9 extends Controller
{
    public function index()
    {
        $articles = [
            ['id' => 1, 'title' => 'Tối ưu Named Route trong Laravel 12', 'body' => 'Sử dụng route() helper thay vì hardcode URL.'],
            ['id' => 2, 'title' => 'Blade Partial cho Breadcrumb', 'body' => 'Tự động tạo thanh điều hướng Breadcrumb dựa trên Route::currentRouteName().'],
        ];
        return view('bt9.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('bt9.articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string', 'min:10'],
        ]);

        return redirect()->route('bt9.articles.index')
            ->with('success', 'Đã lưu bài viết thông qua Named Route bt9.articles.index thành công!');
    }

    public function show(string $id)
    {
        $article = [
            'id' => $id,
            'title' => "Chi tiết bài viết #{$id} (sử dụng Named Route)",
            'body' => "Được điều hướng chính xác nhờ hàm route('bt9.articles.show', {$id}) mà không bị hardcode URL."
        ];
        return view('bt9.articles.show', compact('article'));
    }
}
