
{{-- //bai4 && bai6 --}}
@extends('layouts.app')

@section('title', 'Danh sách sinh viên (DB)')

@section('content')

    <h2>Danh sách sinh viên - CSDL (Eloquent)</h2>

    {{-- Bài 8: Thông báo tạo mới thành công --}}
    @if(session('success'))

        <div style="
            background:#DCFCE7;
            color:#166534;
            border:1px solid #16A34A;
            padding:12px;
            border-radius:8px;
            margin-bottom:15px;
        ">
            {{ session('success') }}
        </div>

    @endif
    <div style="margin-bottom:15px;">

        <a href="{{ url('/students/create') }}" style="
                background:#2563EB;
                color:white;
                padding:10px 18px;
                border-radius:8px;
                text-decoration:none;
                font-weight:bold;
           ">
            ➕ Thêm sinh viên
        </a>
    </div>
    <form method="GET" action="{{ url('/students/db') }}">

        <label>Lọc giới tính:</label>

        <select name="gender" onchange="this.form.submit()">
            <option value="" @selected(empty($gender))>
                Tất cả
            </option>

            <option value="male" @selected(($gender ?? '') === 'male')>
                Nam
            </option>

            <option value="female" @selected(($gender ?? '') === 'female')>
                Nữ
            </option>
        </select>

        <label>Lọc tuổi:</label>

        <select name="age" onchange="this.form.submit()">
            <option value="" @selected(empty($age))>
                Tất cả
            </option>

            <option value="under18" @selected(($age ?? '') === 'under18')>
                Dưới 18
            </option>

            <option value="adult" @selected(($age ?? '') === 'adult')>
                Từ 18 trở lên
            </option>
        </select>

    </form>

    <table border="1" cellpadding="8" cellspacing="0">

        <thead>
            <tr>
                <th>STT</th>
                <th>Họ tên</th>
                <th>Tuổi</th>
                <th>Giới tính</th>
                <th>Email</th>
                <th>Nhãn tuổi</th>
                {{-- bai9 --}}
                <th>Lớp</th>
            </tr>
        </thead>

        <tbody>
            @foreach($students as $s)
                <tr>
                    <td>
                        {{ $loop->iteration + ($students->currentPage() - 1) * $students->perPage() }}
                    </td>

                    <td>{{ $s->name }}</td>

                    <td @class(['adult' => ($s->age ?? 0) >= 18])>
                        {{ $s->age }}
                    </td>

                    <td>{{ $s->gender }}</td>

                    <td>{{ $s->email }}</td>

                    <td>
                        <x-badge :age="$s->age" />
                    </td>
                    {{-- bai9 --}}
                    <td>{{ $s->class_name }}</td>
                </tr>
            @endforeach
        </tbody>

    </table>

    <div style="margin-top: 12px;">
        {{ $students->links() }}
    </div>

@endsection