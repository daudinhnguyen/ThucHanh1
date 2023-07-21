<?php
interface IBook{
    public function getTenSach();
    public function getTacGia();
    public function getNhaXuatBan();
    public function getNamXuatBan();
    public function getISBN();
    public function getDanhMucChuongSach();
    public function setTenSach($tenSach);
    public function setTacGia($tenTacGia);
    public function setNhaXuatBan($nhaXuatBan);
    public function setNamXuatBan($namXuatBan);
    public function setISBN($ISBN);
    public function setDanhMucChuongSach($danhMucChuong);
}