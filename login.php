<?php require_once ("include/header.php")?>



<div class="login_container">
    <div class="container">
        <div class="row text-center">
           <div class="col-md-12">
               <a class="login" href="index.php">home</a>
           </div>
        </div>
    </div>
</div>



    <div class="from">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-4 mx-auto">
                    <form action="dataprocess/login_post.php" method="post">
                        <div class="form-group">
                            <input type="email" name="usr_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="usr_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <p>

                            <?php

                                if(isset($_GET['massgelogin'])){
                                    echo $_GET['massgelogin'];
                                }

                            ?>

                        </p>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary">login</button>
                        <a class="forget" href="forget_pass.php">Forget Password</a>
                        <a class="forget" href="user_signup_form.php">create account</a>
                    </form>
                </div>

            </div>
        </div>
    </div>






<?php require_once ("include/footer.php")?>
