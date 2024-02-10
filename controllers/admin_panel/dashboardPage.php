<?php 
$db = new database();
userlogin();

$all_books = $db->query('SELECT * FROM books')->get();
$popular_book = $db->query('SELECT * FROM books left join authors on books.author_id = authors.id order by books.id DESC limit 5')->get();

Adminview("dashboard",[
    'popular' => $popular_book,
    'all' => $all_books,
]);