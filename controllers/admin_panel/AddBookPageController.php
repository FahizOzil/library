<?php

userlogin();
$db = new database();
$error = [];


$category = $db->query('SELECT * FROM categorys')->get();
$authors = $db->query('SELECT * FROM authors')->get();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!validation::require($_POST['book_title'],1,100)) {
        $error['title'] = 'Title Is Require' ;
    }
    if (!isset($_POST['author'])) {
        $error['author'] = 'author is require';
    }
    if (!isset($_POST['cat'])) {
        $error['cat'] = 'category is require';
    }
    if (!validation::require($_POST['isbn'],1,100)) {
        $error['isbn'] = 'ISBN Is Require' ;
    }

    $filename = $_FILES['book_img']['name'];
    $file_tmp = $_FILES['book_img']['tmp_name'];
    $exp = explode('.', $filename);
    $image_extension = end($exp);
    $extensions = ['jpg', 'jpeg', 'png', 'jfif'];

    $file_name = "FR" . time() . "." . $image_extension;
    if (in_array($image_extension, $extensions) === false) {
        $error['ext'] = "$image_extension file extension is not allowed please choose jpg , jfif ,png and jpeg";
    }

    if (empty($error)) {
        move_uploaded_file($file_tmp, 'upload/' . $file_name);
    }

    if (empty($error)) {
        $db->query('INSERT INTO books(title,author_id,category_id,ISBN,publish_date,copy,language,book_image)
            VALUES(:title, :aut,:cat,:isbn,:pd , :copy ,:lang,:bimg)', [
            'title' => $_POST['book_title'],
            'aut' => $_POST['author'],
            'cat' => $_POST['cat'],
            'isbn' => $_POST['isbn'],
            'pd' => date('m,d,Y'),
            'copy' => $_POST['copy'],
            'lang' => $_POST['lang'],
            'bimg' => $file_name,
        ]);
        
        $db->query('UPDATE categorys SET post = post + 1 where categorys.id = :id',[
            'id' => $_POST['cat'],
        ]);   
        
        return header('location: /dashboard');
    }
}

Adminview('Add-book', [
    'cat' => $category,
    'author' => $authors,
    'message' => $error,
]);
