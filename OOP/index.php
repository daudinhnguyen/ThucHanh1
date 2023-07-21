<?php
    include 'BookList.php';
    if(isset($_COOKIE['BookList'])){
        $booksJson = $_COOKIE['books_cookie'];
        $booksArray = json_decode($booksJson, true);
    }else{
        $bookList = new BookList();
        $booksJson = json_encode($bookList);
        setcookie('books_cookie', $booksJson, time() + 3600, '/');
    }
    
?>