<?php

$db = new database();
$result = $db->query('DELETE FROM categorys where id = :id AND post < 1',[
    'id' => $_GET['id'],
]);


return header('location: /dashboard/category');

