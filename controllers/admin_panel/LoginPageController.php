<?php
$db = new database();
$error=[];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    if (!validation::require($_POST['pass'],1,100)) {
        $error['pass'] = "Enter Your Password";
    }

$result = $db->query('SELECT * from  admins where email = :email',[
    'email' => $_POST['email']
])->first();

if ($result) {
    $hash = $result['password'];


 if(password_verify($_POST['pass'],$hash)){
    $_SESSION['user_id'] = $result['id'];
    $_SESSION['username'] = $result['name'];
    $_SESSION['email'] = $result['email'];
    $_SESSION['role'] = $result['role'];
    $_SESSION['profile'] = $result['profile'];

    return header('location: /dashboard');
 }else{
    echo "pass was wrong";
 }
}else{
    echo "This Email Adrees Could not found";
}

 


}


Adminview('login',[
    'message' => $error,
]);
