<?php
interface Downloadable{
    public function download();
}
class Book{
    protected $tenSach;
    protected $tacGia;
    protected $gia;
    public function __construct($tenSach, $tacGia, $gia){
        $this->tenSach = $tenSach;
        $this->tacGia = $tacGia;
        $this->gia = $gia;
    }
    public function hienThiThongTin(){
        echo "Tên sách: ".$this->tenSach."<br>";
        echo "Tác giả: ".$this->tacGia."<br>";
        echo "Giá: ".$this->gia."<br>";
    }
}
class Ebook extends Book implements Downloadable{
    private $kichThuocFile;
    public function __construct($tenSach, $tacGia, $gia, $kichThuocFile){
        parent::__construct($tenSach,$tacGia,$gia);
        $this->kichThuocFile = $kichThuocFile;
    }
    public function download(){
        echo "Đang tải Ebook...<br>";
    }
    public function hienThiThongTin(){
        parent::hienThiThongTin();
        echo "Kích thước file: ".$this->kichThuocFile." MB<br>";
    }
}
$ebook = new Ebook("Lập trình PHP","Nguyễn Văn A",200000,15);
$ebook->hienThiThongTin();
$ebook->download();
?>