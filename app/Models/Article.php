<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $id;
    public $title;
    public $body;

    /**
     * Giả lập cơ chế Route Model Binding (findOrFail) khi chưa nối CSDL
     */
    public function resolveRouteBinding($value, $field = null)
    {
        if ($value == 1) {
            $article = new static();
            $article->id = 1;
            $article->title = 'Giới thiệu Laravel 12 (Route Model Binding)';
            $article->body = 'Nội dung chi tiết bài viết 1 được tự động tìm kiếm và ánh xạ (bind) từ tham số URL vào tham số Model $article.';
            return $article;
        }

        if ($value == 2) {
            $article = new static();
            $article->id = 2;
            $article->title = 'Blade Components & Directives';
            $article->body = 'Nội dung chi tiết bài viết 2 được lấy tự động qua Route Model Binding.';
            return $article;
        }

        // Tự động ngắt và trả về 404 nếu không tìm thấy ID
        abort(404, 'Không tìm thấy bài viết ID: ' . $value);
    }
}
