<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Bài 3: Hiển thị danh sách sinh viên từ mảng tĩnh
    public function index()

    {
        // Khởi tạo mảng dữ liệu sinh viên
        $students = [
            ['name' => 'Nguyễn An', 'age' => 19, 'email' =>

            'an@huit.edu.vn'],

            ['name' => 'Trần Bình', 'age' => 18, 'email' =>

            'binh@huit.edu.vn'],

            ['name' => 'Lê Chi', 'age' => 17, 'email' =>

            'chi@huit.edu.vn'],

            ['name' => 'Phạm Dũng', 'age' => 20, 'email' =>

            'dung@huit.edu.vn'],

            ['name' => 'Đỗ Em', 'age' => 21, 'email' =>

            'em@huit.edu.vn'],
        ];

        // Truyền dữ liệu sang View để hiển thị
        return view('students.index', compact('students'));
    }

    // Bài 4 & Bài 6: Lấy dữ liệu sinh viên từ CSDL bằng Eloquent
    public function indexDb()
    {
        // Lấy giới tính được chọn từ request
        $gender = request('gender'); // 'male' | 'female' | null
        $age = request('age');

        // Khởi tạo truy vấn và sắp xếp theo id giảm dần
        $query = \App\Models\Student::query()->orderBy('id', 'desc');


        // Nếu có chọn giới tính thì thực hiện lọc dữ liệu
        if ($gender) {
            $query->where('gender', $gender);
        }

        if ($age == 'under18') {
            $query->where('age', '<', 18);
        }

        if ($age == 'adult') {
            $query->where('age', '>=', 18);
        }

        // Phân trang và giữ lại tham số lọc
        $students = $query->paginate(5)->appends(compact('gender', 'age'));

        // Truyền dữ liệu sang View

        return view('students.index_db', compact('students', 'gender', 'age'));
    }

    // Bài 5: Hiển thị dữ liệu từ mảng và CSDL để so sánh
    public function combined()
    {
        // Mảng dữ liệu sinh viên tĩnh
        $static = [
            [
                'name' => 'Nguyễn An',
                'age' => 19,
                'email' => 'an@huit.edu.vn',
                'gender' => 'male'
            ],
            [
                'name' => 'Trần Bình',
                'age' => 18,
                'email' => 'binh@huit.edu.vn',
                'gender' => 'male'
            ],
            [
                'name' => 'Lê Chi',
                'age' => 17,
                'email' => 'chi@huit.edu.vn',
                'gender' => 'female'
            ],
        ];

        // Lấy dữ liệu sinh viên từ CSDL
        $db = \App\Models\Student::orderBy('id', 'desc')->paginate(5);

        // Xác định nguồn dữ liệu cần hiển thị (array hoặc db)
        $source = request('source', 'db');

        // Trả dữ liệu về View
        return view('students.combined', compact('static', 'db', 'source'));
    }
    // Bài 8: Hiển thị form thêm sinh viên
    public function create()
    {
        return view('students.create');
    }

    // Bài 8: Lưu dữ liệu sinh viên
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:students,email',
            'age' => 'nullable|integer|min:16',
            'gender' => 'required|in:male,female',
        ]);

        Student::create($validated);

        return redirect('/students/db')
            ->with('success', 'Tạo mới thành công');
    }
}