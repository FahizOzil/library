<?php
require "./Farshells/headers.php";
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 mt-5">
            <div class="login-image">
                <img class="rounded" src="/images/login2.jpeg"  width="100%"  alt="Image">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form">
                <form action="" method="post">
                    <div class="sign-up my-5">
                        <div class="h1 text-center my-3"><b>Login Account</b></div>
                        <!-- Hover added -->
                            <div class="list-group">     
                                <a style="width: 22rem;border:1px solid #e1e1e1" href="#" class="list-group-item text-dark text-center my-3">Sign in With Google <i class="fab fa-google" style="color: green;"></i> </a>
                                <a style="width: 22rem;border:1px solid #e1e1e1" href="#" class="list-group-item text-dark text-center">Sign in With Facebook <i class="fab fa-facebook" style="color: blue;"></i></a>
                            </div>
                         
                            <div class="or mt-5 position-relative">
                                <div class="div" style="border:1px solid #e1e1e1"></div>
                                <p  class="position-absolute" style="top:-46px;left: 121px;background: white; padding: 33px;"> Or </p>
                                
                            </div>
                            
                        </div>
                        <div class="col-mb-3">
                            <label class="form-label" for="">Email</label>
                            <input type="text" name="email" class="form-control" style="width: 22rem;" placeholder="Enter Email">
                        </div>
                        <div class="col-mb-3 ">
                           <label class="form-label" for="">Password</label>
                           <input type="password" name="pass" class="form-control" style="width: 22rem;" placeholder="Enter Your Name">
                        <span> <p class="text-danger"> <?= $message['pass'] ?? '' ?> </p>  </span>

                       </div>
                    <div class="btn my-3 d-flex justify-content-center">
                        <button class="btn btn-danger" style="padding: 10px 110px;"> <b>Login </b></button>
                    </div>
                    <span class="text-center"> 
                    <p><b>Create New Account ? <a class="text-warning" href="/register/admin">Click</b></a></p> 
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>