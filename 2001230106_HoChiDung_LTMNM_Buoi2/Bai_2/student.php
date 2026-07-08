<?php
class Student{
    private $name;
    private $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function display(){
        echo "Name: {$this->name}, Age: {$this->age}<br>";
    }
    public function __destruct(){
        echo "Đối tượng Student đã bị hủy.<br>";
    }
}
$student = new Student("Hồ Chí Dũng",21);
$student->display();
?>