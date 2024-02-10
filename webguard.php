<?php 


function userlogin(){
    if (!isset($_SESSION['user_id'])) {
        return header('location: /login'); 

    }
}