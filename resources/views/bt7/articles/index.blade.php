@extends('layouts.app')
@section('title','Danh sách bài viết - Bài tập 07')
@section('content')
<h2>Danh sách bài viết (BT07 - Form xoá an toàn)</h2>

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
<form action="{{ route('bt7.articles.destroy', $a['id']) }}" method="post" style="display:inline">
    @csrf
    @method('DELETE')
    <button type="submit" 
            onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết #{{ $a['id'] }} không?')"
            style="background:#dc2626;color:white;border:none;padding:6px 12px;border-radius:4px;cursor:pointer">
        Xoá an toàn
    </button>
</form>
</td>
</tr>
@empty
<tr><td colspan="3">Chưa có bài viết.</td></tr>
@endforelse
</tbody>
</table>
@endsection
