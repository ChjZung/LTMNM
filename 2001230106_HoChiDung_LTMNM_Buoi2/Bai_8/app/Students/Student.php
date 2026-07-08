<?php

namespace App\Students;

class Student extends Person{

    private $maSinhVien;

    public function __construct($hoTen,$tuoi,$maSinhVien){

        parent::__construct($hoTen,$tuoi);

        $this->maSinhVien = $maSinhVien;

    }

    public function hienThi(){

        parent::hienThi();

        echo "Mã sinh viên: ".$this->maSinhVien."<br>";

    }

}

?>