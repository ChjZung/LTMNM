@extends('layouts.app')
@section('title', 'Bài tập 10 - Component Card')
@section('content')

@include('partials.breadcrumb')

<h2>Bài tập 10: Component & Partial hóa giao diện (&lt;x-card&gt;)</h2>

<x-card title="Thống kê bài viết">
    <p style="margin:0 0 8px 0">Tổng số bài viết hiện có trong hệ thống: <strong style="color:#2563eb">10 bài</strong></p>
    <p style="margin:0">Trạng thái hệ thống: <span style="color:#16a34a;font-weight:600">Hoạt động bình thường</span></p>
</x-card>

<x-card title="Hướng dẫn sử dụng Component Card">
    <p style="margin:0 0 8px 0">Component <code>&lt;x-card&gt;</code> được thiết kế để tái sử dụng khung nội dung (Box) ở bất kỳ trang nào.</p>
    <p style="margin:0">Truyền tiêu đề qua thuộc tính <code>title="..."</code> và nội dung bên trong qua slot <code>@{{ $slot }}</code>.</p>
</x-card>

@endsection
