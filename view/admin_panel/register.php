<?php
require "./Farshells/headers.php";

?>

<div class="container">
    <div class="row  justify-content-center">
        <div class="col-md-5 mt-5">
            <div class="login-image">
                <img class="rounded" src="/images/login2.jpeg" width="100%"  alt="Image">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="col-mb-3 mt-2">
                        <div class="sign-up my-4">
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
                        <label class="form-label" for="">Name</label>
                        <input type="text" name="name" class="form-control" style="width: 22rem;" placeholder="Enter Your Name">
                        <span> <p class="text-danger"> <?=  $msg['name'] ?? '' ?>  </p> </span>
                    </div>
                    <div class="col-mb-3">
                        <label class="form-label" for="">Email</label>
                        <input type="email" name="email" class="form-control" style="width: 22rem;" placeholder="Enter Email">
                    </div>

                    <div class="col-mb-3">
                        <label class="form-label" for="">Role</label>
                        <select class="form-select" name="role" id="">
                            <option disabled selected>Select Role</option>
                            <option value="1">Admin</option>
                            <option value="0">Normal</option>
                        </select>
                    </div>
                    
                    <div class="col-mb-3">
                        <label class="form-label" for="">Password</label>
                        <input type="password" name="pass" class="form-control" style="width: 22rem;" placeholder="******">
                        <span> <p class="text-danger"> <?= $msg['pass'] ?? '' ?> </p> </span>
                    </div>
                    <div class="col-mb-3">
                        <label class="form-label" for="">Confrim Password</label>
                        <input type="password" name="cpass" class="form-control" style="width: 22rem;" placeholder="******">
                        <span> <p class="text-danger"> <?= $msg['confrimPass'] ?? '' ?> </p> </span>
                    </div>
                    <div class="col-mb-3">
                        <label class="form-label" for="">Select image</label>
                        <input type="file" name="profile" class="form-control" style="width: 22rem;">
                    </div>
                    <div class="btn my-3 d-flex justify-content-center">
                        <button class="btn btn-danger" style="padding: 10px 110px;"> <b>Sign Up </b></button>
                        <span>  </span>
                    </div>
                    <span class="text-center"> 
                    <p><b>Already have an Account ? <a class="text-warning" href="/login">Log In</b></a></p> 
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>