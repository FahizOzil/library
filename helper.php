<?php
session_start();



function pr($val){
    echo "<pre>";
    print_r($val);
    echo "</pre>";
}

function dd($val){
    echo "<pre>";
    print_r($val);
    echo "</pre>";
    die();
}

function abort($path){
    return require "view/$path.php";
}

function view($path , $param = []){
    extract($param);
    return require "view/$path.php";
}

function Adminview($path , $param = []){
    extract($param);
    return require "view/admin_panel/$path.php";
}