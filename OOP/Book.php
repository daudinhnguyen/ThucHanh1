<?php
include 'IBook.php';
class Book implements IBook{
    private $tenSach, $tenTacGia, $nhaXuatBan, $namXuatBan, $ISBN, $danhMucChuong;
    public function __construct($tenSach, $tenTacGia, $nhaXuatBan, $namXuatBan, $ISBN, $danhMucChuong){
        $this->tenSach = $tenSach;
        $this->tenTacGia = $tenTacGia;
        $this->nhaXuatBan = $nhaXuatBan;
        $this->namXuatBan = $namXuatBan;
        $this->ISBN = $ISBN;
        $this->danhMucChuong = $danhMucChuong;
    }
    public function getTenSach(){
        return $this->tenSach;
    }
    public function getTacGia(){
        return $this->tenTacGia;
    }
    public function getNhaXuatBan(){
        return $this->nhaXuatBan;
    }
    public function getNamXuatBan(){
        return $this->namXuatBan;
    }
    public function getISBN(){
        return $this->ISBN;
    }
    public function getDanhMucChuongSach(){
        return $this->danhMucChuong;
    }
    public function setTenSach($tenSach){
        $this->tenSach = $tenSach;
    }
    public function setTacGia($tenTacGia){
        $this->tenTacGia = $tenTacGia;
    }
    public function setNhaXuatBan($nhaXuatBan){
        $this->nhaXuatBan = $nhaXuatBan;
    }
    public function setNamXuatBan($namXuatBan){
        $this->namXuatBan = $namXuatBan;
    }
    public function setISBN($ISBN){
        $this->ISBN = $ISBN;
    }
    public function setDanhMucChuongSach($danhMucChuong){
        $this->danhMucChuong = $danhMucChuong;
    }
}
?>