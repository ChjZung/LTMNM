<?php
// ========== BACKEND: XỬ LÝ TO-DO LIST ==========

// Khai báo tên file JSON để lưu dữ liệu
$file = "todo.json";

// ========== BẬC 1: ĐỌC FILE JSON ==========
// file_exists($file) = kiểm tra file có tồn tại không?
// Nếu có: json_decode(file_get_contents($file), true) = đọc file và chuyển thành array
// Nếu không: $todos = [] (mảng rỗng)
$todos = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

// ========== BẬC 2: XỬ LÝ THÊM TASK ==========
// isset($_POST["add"]) = kiểm tra xem có dữ liệu "add" từ JavaScript không?
if (isset($_POST["add"])) {
    // array() = tạo mảng mới
    // "task" => $_POST["add"] = lưu tên công việc
    // "done" => false = mặc định chưa hoàn thành
    $todos[] = array(
        "task" => $_POST["add"], 
        "done" => false
    );
}

// ========== BẬC 3: XỬ LÝ TOGGLE HOÀN THÀNH ==========
// isset($_POST["done"]) = kiểm tra xem có dữ liệu "done" từ JavaScript không?
if (isset($_POST["done"])) {
    // $_POST["done"] = vị trí của công việc (0, 1, 2, ...)
    // !$todos[$_POST["done"]]["done"] = đảo ngược true/false
    // true -> false (bỏ dấu), false -> true (đánh dấu)
    $todos[$_POST["done"]]["done"] = !$todos[$_POST["done"]]["done"];
}

// ========== BẬC 4: XỬ LÝ XÓA TASK ==========
// isset($_POST["delete"]) = kiểm tra xem có dữ liệu "delete" từ JavaScript không?
if (isset($_POST["delete"])) {
    // array_splice($todos, $index, 1) = xóa 1 phần tử tại vị trí $index
    // Ví dụ: xóa task thứ 2 -> xóa phần tử tại index 1
    array_splice($todos, $_POST["delete"], 1);
}

// ========== BẬC 5: LƯU DỮ LIỆU VÀO FILE JSON ==========
// json_encode($todos) = chuyển array PHP thành chuỗi JSON
// file_put_contents($file, ...) = ghi dữ liệu vào file
file_put_contents($file, json_encode($todos));

// ========== BẬC 6: GỬI DỮ LIỆU TƯƠNG LẠI (JSON) ==========
// header("Content-Type: application/json") = báo cho browser đây là JSON
header("Content-Type: application/json");
// echo json_encode($todos) = gửi danh sách task cập nhật về cho JavaScript
echo json_encode($todos);
?>