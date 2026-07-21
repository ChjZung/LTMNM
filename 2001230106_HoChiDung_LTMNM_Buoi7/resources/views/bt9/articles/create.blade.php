@extends('layouts.app')
@section('title','Tạo bài viết mới - BT09')
@section('content')

@include('partials.breadcrumb')

<h2>Tạo bài viết (Sử dụng route() Helper)</h2>

<form action="{{ route('bt9.articles.store') }}" method="post" style="background:#f8fafc;padding:20px;border-radius:8px;border:1px solid #e2e8f0;margin-top:12px">
@csrf
<x-input name="title" label="Tiêu đề bài viết" />

<label style="display:block;margin:12px 0 4px;font-weight:600">Nội dung bài viết</label>
<textarea name="body" rows="5" style="width:100%;padding:10px;border:1px solid #cbd5e1;border-radius:6px">{{ old('body') }}</textarea>
@error('body')
<div style="color:#991B1B;margin-top:4px">{{ $message }}</div>
@enderror

<div style="margin-top:16px">
    <x-button variant="primary" type="submit">Lưu bài viết</x-button>
    <a href="{{ route('bt9.articles.index') }}" style="margin-left:12px;color:#64748b;text-decoration:none">Quay lại danh sách</a>
</div>
</form>
@endsection
