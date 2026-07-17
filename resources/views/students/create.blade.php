{{-- bai8 --}}
{{-- Bài 8: Form thêm sinh viên --}}
@extends('layouts.app')

@section('title', 'Thêm sinh viên')

@section('content')

<div style="
    max-width:650px;
    margin:30px auto;
    background:#fff;
    border-radius:18px;
    box-shadow:0 8px 25px rgba(0,0,0,.12);
    overflow:hidden;
">

    <div style="
        background:linear-gradient(135deg,#2563EB,#06B6D4);
        color:white;
        text-align:center;
        padding:25px;
    ">
        <h2 style="margin:0;">➕ Thêm sinh viên mới</h2>
        <p style="margin-top:8px;">Nhập đầy đủ thông tin để lưu vào cơ sở dữ liệu</p>
    </div>

    <form method="POST" action="{{ url('/students') }}" style="padding:30px;">

        @csrf

        {{-- Họ tên --}}
        <div style="margin-bottom:20px;">
            <label><b>Họ tên</b></label><br>

            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                placeholder="Nhập họ tên..."
                style="
                    width:100%;
                    padding:10px;
                    margin-top:6px;
                    border:1px solid #ccc;
                    border-radius:8px;
                ">

            @error('name')
                <div style="color:red;margin-top:5px;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Email --}}
        <div style="margin-bottom:20px;">
            <label><b>Email</b></label><br>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="example@gmail.com"
                style="
                    width:100%;
                    padding:10px;
                    margin-top:6px;
                    border:1px solid #ccc;
                    border-radius:8px;
                ">

            @error('email')
                <div style="color:red;margin-top:5px;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Tuổi --}}
        <div style="margin-bottom:20px;">
            <label><b>Tuổi</b></label><br>

            <input
                type="number"
                name="age"
                value="{{ old('age') }}"
                placeholder="Nhập tuổi"
                style="
                    width:100%;
                    padding:10px;
                    margin-top:6px;
                    border:1px solid #ccc;
                    border-radius:8px;
                ">

            @error('age')
                <div style="color:red;margin-top:5px;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Giới tính --}}
        <div style="margin-bottom:25px;">
            <label><b>Giới tính</b></label><br><br>

            <label>
                <input
                    type="radio"
                    name="gender"
                    value="male"
                    {{ old('gender') == 'male' ? 'checked' : '' }}>
                Nam
            </label>

            &nbsp;&nbsp;&nbsp;

            <label>
                <input
                    type="radio"
                    name="gender"
                    value="female"
                    {{ old('gender') == 'female' ? 'checked' : '' }}>
                Nữ
            </label>

            @error('gender')
                <div style="color:red;margin-top:8px;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div style="text-align:center;">

            <button
                type="submit"
                style="
                    background:#2563EB;
                    color:white;
                    border:none;
                    padding:12px 30px;
                    border-radius:10px;
                    cursor:pointer;
                    font-size:16px;
                ">
                💾 Thêm sinh viên
            </button>

            <a href="{{ url('/students/db') }}"
                style="
                    margin-left:15px;
                    text-decoration:none;
                    color:#555;
                    font-weight:bold;
                ">
                ← Quay lại
            </a>

        </div>

    </form>

</div>

@endsection