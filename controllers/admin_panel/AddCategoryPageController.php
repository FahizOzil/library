<?php

$db = new database();
$error = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!validation::require($_POST['category_name'],1,100)) {
        $error['cat'] = 'This Field is Require';
    }

   if (empty($error)) {
    $db->query("INSERT INTO categorys(category_name)VALUES(:name)",[
        'name' => $_POST['category_name'],
        ]); 
        return header('location: /dashboard/category');
   }

}


Adminview('add-category',[
    'message' => $error,
]);

?>