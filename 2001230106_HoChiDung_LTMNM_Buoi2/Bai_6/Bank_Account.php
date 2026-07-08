<?php

class BankAccount{
    private $soTaiKhoan;
    private $tenChuTaiKhoan;
    private $soDu;
    public function __construct($soTaiKhoan, $tenChuTaiKhoan, $soDu){
        $this->soTaiKhoan = $soTaiKhoan;
        $this->tenChuTaiKhoan = $tenChuTaiKhoan;
        $this->soDu = $soDu;
    }
    public function napTien($soTien){
        if($soTien > 0){
            $this->soDu += $soTien;
            echo "Nạp tiền thành công!<br>";
        }else{
            echo "Số tiền nạp không hợp lệ!<br>";
        }
    }
    public function rutTien($soTien){
        if($soTien <= $this->soDu){
            $this->soDu -= $soTien;
            echo "Rút tiền thành công!<br>";
        }else{
            echo "Không đủ số dư để rút!<br>";
        }
    }
    public function hienThiThongTin(){
        echo "Số tài khoản: " . $this->soTaiKhoan . "<br>";
        echo "Tên chủ tài khoản: " . $this->tenChuTaiKhoan . "<br>";
        echo "Số dư: " . $this->soDu . "<br>";
    }
}
$taiKhoan = new BankAccount("123456789", "Nguyễn Văn A", 5000000);
$taiKhoan->hienThiThongTin();
echo "<hr>";
$taiKhoan->napTien(1000000);
$taiKhoan->rutTien(2000000);
echo "<hr>";
$taiKhoan->hienThiThongTin();
echo "--------------------------------<br>";
echo "trường hợp không đủ số dư import vào 6 triệu <br>";
$taiKhoan->rutTien(6000000);
?>