@extends('layouts.app')
@section('title', $article->title)
@section('content')
<h2>Chi tiết bài viết #{{ $article->id }} (Route Model Binding)</h2>
<div style="background:#f9fafb;padding:16px;border:1px solid #e5e7eb;border-radius:8px;margin-top:12px">
    <h3 style="margin-top:0;color:#1d4ed8">{{ $article->title }}</h3>
    <p style="color:#374151;line-height:1.6">{{ $article->body }}</p>
</div>
<a href="{{ route('bt5.articles.index') }}" style="display:inline-block;margin-top:16px;color:#2563eb">&larr; Quay lại danh sách</a>
@endsection
