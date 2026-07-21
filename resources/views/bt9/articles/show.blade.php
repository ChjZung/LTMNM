@extends('layouts.app')
@section('title', $article['title'])
@section('content')

@include('partials.breadcrumb')

<h2>Chi tiết bài viết #{{ $article['id'] }}</h2>

<div style="background:#f8fafc;padding:20px;border-radius:8px;border:1px solid #e2e8f0;margin-top:12px">
    <h3 style="margin-top:0;color:#1e293b">{{ $article['title'] }}</h3>
    <p style="color:#475569;line-height:1.6">{{ $article['body'] }}</p>
</div>

<div style="margin-top:16px">
    <a href="{{ route('bt9.articles.index') }}" style="color:#2563eb;text-decoration:none;font-weight:500">&larr; Quay lại danh sách bằng route('bt9.articles.index')</a>
</div>
@endsection
