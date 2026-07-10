<?php

/*
 time.php
 Mô tả: Trả về thời gian hiện tại của server theo định dạng giờ:phút:giây.
 Dùng cho ví dụ AJAX trong `index.php` để hiển thị thời gian động.
 */

// Lấy thời gian hiện tại của server
// Lưu ý: Có thể đặt timezone bằng date_default_timezone_set nếu cần
echo date("H:i:s");

?>