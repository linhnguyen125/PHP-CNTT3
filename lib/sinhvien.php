<?php
class PERSON
{
    protected $hoTen, $ngaySinh, $queQuan;
}

class SINHVIEN extends PERSON
{
    protected $lop;

    public function __construct($hoTen, $ngaySinh, $queQuan, $lop)
    {
        $this->hoTen = $hoTen;
        $this->ngaySinh = $ngaySinh;
        $this->queQuan = $queQuan;
        $this->lop = $lop;
    }

    public function showInfo()
    {
        echo $this->hoTen . '<br>';
        echo $this->ngaySinh . '<br>';
        echo $this->queQuan . '<br>';
        echo $this->lop;
    }
}
