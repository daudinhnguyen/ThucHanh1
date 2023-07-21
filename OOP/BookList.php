<?php
include 'Book.php';
class BookList{
    public $BookList;
    public function __construct(){
        $this->BookList = array();
    }
    public function addBook(Book $book){
        $this->BookList[] = $book;
    }
    public function getBookList(){
        return $this->BookList;
    }
    public function sortBookList(){
        
    }
}