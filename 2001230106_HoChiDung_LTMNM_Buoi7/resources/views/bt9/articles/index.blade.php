@extends('layouts.app')
@section('title','Danh sách bài viết - BT09')
@section('content')

@include('partials.breadcrumb')

<h2>Danh sách bài viết (BT09 - Tối ưu Named Routes)</h2>

<a href="{{ route('bt9.articles.create') }}" style="display:inline-block;margin-bottom:12px;padding:8px 14px;background:#2563eb;color:#fff;text-decoration:none;border-radius:6px;font-weight:500">+ Tạo bài viết mới (bằng route('bt9.articles.create'))</a>

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
<a href="{{ route('bt9.articles.show', $a['id']) }}" style="color:#2563eb">Xem (Named Route)</a>
</td>
</tr>
@empty
<tr><td colspan="3">Chưa có bài viết.</td></tr>
@endforelse
</tbody>
</table>
@endsection
