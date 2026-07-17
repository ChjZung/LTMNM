{{-- Bài 7: Trang Giới thiệu khóa học --}}
@extends('layouts.app')

@section('title', 'Giới thiệu khóa học')

@section('content')
{{-- bai9 --}}
{{-- 
<div style="
    max-width:900px;
    margin:30px auto;
    background:#ffffff;
    border-radius:18px;
    box-shadow:0 8px 25px rgba(0,0,0,.12);
    overflow:hidden;
">

    <div style="
        background:linear-gradient(135deg,#4F46E5,#06B6D4);
        color:white;
        padding:35px;
        text-align:center;
    ">
        <h1 style="margin:0;">📘 LẬP TRÌNH MÃ NGUỒN MỞ</h1>
        <p style="margin-top:10px;font-size:18px;">
            Laravel Framework - Bài tập 07
        </p>
    </div>

    <div style="padding:35px;">

        <div style="
            background:#EEF6FF;
            border-left:6px solid #2563EB;
            padding:20px;
            border-radius:10px;
            margin-bottom:25px;
        ">
            <h2 style="margin-top:0;color:#1E3A8A;">
                🎯 Mục tiêu học phần
            </h2>

            <ul style="line-height:2;">
                <li>Hiểu mô hình MVC trong Laravel.</li>
                <li>Sử dụng Routing, Controller và Blade Template.</li>
                <li>Thao tác dữ liệu với Eloquent ORM.</li>
                <li>Xây dựng ứng dụng Web bằng Laravel Framework.</li>
            </ul>
        </div>

        <div style="
            background:#F0FDF4;
            border-left:6px solid #16A34A;
            padding:20px;
            border-radius:10px;
            margin-bottom:25px;
        ">
            <h2 style="margin-top:0;color:#166534;">
                📅 Lịch 7 buổi Lab
            </h2>

            <ol style="line-height:2;">
                <li>Khởi tạo dự án Laravel.</li>
                <li>Routing và Controller.</li>
                <li>Blade Template.</li>
                <li>Model - Migration - Seeder.</li>
                <li>Eloquent ORM và Pagination.</li>
                <li>Blade Directive, Component và Layout.</li>
                <li>Validation và CRUD.</li>
            </ol>
        </div>

        <div style="
            background:#FFF7ED;
            border-left:6px solid #EA580C;
            padding:20px;
            border-radius:10px;
        ">
            <h2 style="margin-top:0;color:#C2410C;">
                🎓 Chuẩn đầu ra
            </h2>

            <ul style="line-height:2;">
                <li>Xây dựng ứng dụng Laravel theo mô hình MVC.</li>
                <li>Thao tác CRUD với cơ sở dữ liệu MySQL.</li>
                <li>Sử dụng Blade Template, Component và Layout.</li>
                <li>Triển khai ứng dụng Web Laravel cơ bản.</li>
            </ul>
        </div>

    </div>

    <div style="
        background:#F3F4F6;
        text-align:center;
        padding:18px;
        color:#6B7280;
        font-size:14px;
    ">
        © 2026 - Lập trình mã nguồn mở | Laravel Framework 12
    </div>

</div> --}}
{{-- bai10 --}}
<x-card title="🎯 Mục tiêu học phần">

<ul>
    <li>Hiểu mô hình MVC.</li>
    <li>Sử dụng Blade Template.</li>
    <li>Làm việc với Eloquent ORM.</li>
    <li>Xây dựng ứng dụng Laravel.</li>
</ul>

</x-card>
<x-card title="📅 Lịch 7 buổi Lab">

<ol>
    <li>Khởi tạo Laravel.</li>
    <li>Routing.</li>
    <li>Blade.</li>
    <li>Migration.</li>
    <li>Eloquent.</li>
    <li>Component.</li>
    <li>Validation.</li>
</ol>

</x-card>
<x-card title="🎓 Chuẩn đầu ra">

<ul>
    <li>Xây dựng ứng dụng MVC.</li>
    <li>Thực hiện CRUD.</li>
    <li>Sử dụng Blade Component.</li>
    <li>Kết nối MySQL bằng Eloquent.</li>
</ul>

</x-card>

@endsection
@include('partials.footer')