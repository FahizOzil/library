<?php


$db = new database();

$limit = 3;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}else{
    $page = 1;
}

$offset = ($page - 1) * $limit;



$latest = $db->query("SELECT * FROM books  order by id DESC LIMIT 5")->get();
$allBook = $db->query("SELECT * FROM books left join authors on books.author_id = authors.id left join categorys on books.category_id = categorys.id limit {$offset},{$limit}")->get();
 $pagination = $db->query('SELECT * FROM books left join authors on books.author_id = authors.id left join categorys on books.category_id = categorys.id ')->get();

Adminview('library',[
    'latest' => $latest,
    'all_book' => $allBook,
    'limit' => $limit,
    'total_records' => count($pagination),

]);
?>