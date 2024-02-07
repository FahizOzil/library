<?php
try {
$db = new database();
$error = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   if (!validation::require($_POST['name'],1,100)) {
    $error['name'] = "Name is Require";
   }

   if (validation::CheckPass($_POST['pass'])) {
    $error['pass'] = "Password must be 8 Character or greater";
   }

   if (validation::confrimpassword($_POST['pass'],$_POST['cpass'])) {
       $error['confrimPass'] = 'your Password And Confrim Is Not matched';
   }

    $filename = $_FILES['profile']['name'];
    $file_tmp = $_FILES['profile']['tmp_name'];
    $exp = explode('.',$filename);
    $fileExt = end($exp);
    $extension = ['jpg','jpeg','jfif','png'];

    $filename = 'FR' . time() . '.' . $fileExt;
    
   if (in_array($fileExt , $extension) === false) {
      $error['file_ext'] = 'This File Extension Is Not Allowed';
   }

   if (empty($error)) {
    move_uploaded_file($file_tmp,'upload/'.$filename );
   }

    if (empty($error)) {
        $result = $db->query("INSERT INTO admins(name,email,role,password,cpassword,profile)VALUES(:n,:em,:role,:pass,:cpass,:pf)",[
            'n' => $_POST['name'], 
            'em' => $_POST['email'],
            'role' => $_POST['role'],
            'pass' =>  password_hash($_POST['pass'],PASSWORD_BCRYPT),
            'cpass' => password_hash($_POST['cpass'],PASSWORD_BCRYPT),
            'pf' => $filename,
             ]);
        return header('location: /login');     
    }
}

Adminview('register',[
    'msg' => $error,
]);
} catch (Exception $e) {
    $e->getMessage();
}