<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleControllerBT7 extends Controller
{
    public function index()
    {
        $articles = [
            ['id' => 1, 'title' => 'Giới thiệu Laravel 12', 'body' => 'Nội dung A'],
            ['id' => 2, 'title' => 'Blade Components', 'body' => 'Nội dung B'],
        ];
        return view('bt7.articles.index', compact('articles'));
    }

    public function destroy(string $id)
    {
        // Xử lý xóa và phản hồi kèm Flash session message
        return redirect()->route('bt7.articles.index')
            ->with('success', "Đã xoá an toàn bài viết #{$id} thành công (demo).");
    }
}
