<?php

require "autoload.php";

use App\Students\Student;

$sinhVien = new Student("Hồ Chí Dũng",20,"DH001");

$sinhVien->hienThi();

?>