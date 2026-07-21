@extends('layouts.app')
@section('title','Danh sách bài viết (BT4 & BT5)')
@section('content')
<h2>Danh sách bài viết</h2>
<a href="{{ route('bt5.articles.create') }}" style="display:inline-block;margin-bottom:10px;padding:6px 12px;background:#2563eb;color:#fff;text-decoration:none;border-radius:4px">+ Tạo bài viết mới</a>
<table>
<thead>
<tr><th>ID</th><th>Tiêu đề</th><th>Hành động</th></tr>
</thead>
<tbody>
@forelse($articles as $a)
<tr>
<td>{{ $a['id'] }}</td>
<td>{{ $a['title'] }}</td>
<td>
<a href="{{ route('bt5.articles.show',$a['id']) }}">Xem</a> |
<a href="{{ route('bt5.articles.edit',$a['id']) }}">Sửa</a> |
<form action="{{ route('bt5.articles.destroy',$a['id']) }}" method="post" style="display:inline">
@csrf
@method('DELETE')
<button type="submit" onclick="return confirm('Xoá?')">Xoá</button>
</form>
</td>
</tr>
@empty
<tr><td colspan="3">Chưa có bài viết.</td></tr>
@endforelse
</tbody>
</table>
@endsection
