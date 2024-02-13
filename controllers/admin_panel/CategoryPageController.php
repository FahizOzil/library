<?php

$db = new database();

$category = $db->query('SELECT * FROM categorys ORDER BY id DESC')->get();


Adminview('category',[
    'category' => $category,
]);