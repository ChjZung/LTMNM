@extends('layouts.app')
@section('title', 'Tạo bài viết (BT08)')

@push('styles')
<style>
    .custom-form-card {
        background: #f8fafc;
        border: 1px solid #cbd5e1;
        padding: 24px;
        border-radius: 10px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        margin-top: 16px;
    }
    .custom-textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #cbd5e1;
        border-radius: 6px;
        font-family: inherit;
    }
</style>
@endpush

@section('content')
<h2>Tạo bài viết (BT08 - Nâng cấp UI bằng Component & @@push)</h2>

<div class="custom-form-card">
    <form action="{{ route('bt5.articles.store') }}" method="post">
        @csrf
        <x-input name="title" label="Tiêu đề bài viết" />

        <label style="display:block;margin:12px 0 4px;font-weight:600">Nội dung bài viết</label>
        <textarea name="body" rows="5" class="custom-textarea" placeholder="Nhập nội dung vào đây...">{{ old('body') }}</textarea>

        <div style="margin-top:20px;display:flex;gap:12px">
            <x-button variant="primary" type="submit">Lưu bài viết (Button Primary)</x-button>
            <x-button variant="danger" type="button" onclick="history.back()">Hủy bỏ (Button Danger)</x-button>
        </div>
    </form>
</div>
@endsection
