<?php
namespace App\Students;
class Person{
    protected $hoTen;
    protected $tuoi;
    public function __construct($hoTen,$tuoi){
        $this->hoTen = $hoTen;
        $this->tuoi = $tuoi;
    }
    public function hienThi(){

        echo "Họ tên: ".$this->hoTen."<br>";
        echo "Tuổi: ".$this->tuoi."<br>";
    }
}
?>