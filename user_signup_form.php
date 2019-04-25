<?php require_once ("include/header.php")?>



<div class="user_sinup">
    <div class="container">
        <div class="row text-center">
           <div class="col-md-12">
               <h1>User Regintration form</h1>
           </div>
        </div>
    </div>
</div>

<div class="login_container">
    <div class="container">
        <div class="row text-center">
           <div class="col-md-12">
               <a class="login" href="index.php">home</a>
               <a class="login" href="login.php">login</a>
           </div>
        </div>
    </div>
</div>


<div class="from">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-4 mx-auto">
                <form action="dataprocess/user_sinup_post.php" method="post">
                    <div class="form-group">
                        <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Frist name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="role" id="exampleFormControlSelect1">
                            <option value="1" >admin</option>
                            <option value="2">User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" name="singup" class="btn btn-primary">sign up</button>

                </form>
            </div>

        </div>
    </div>
</div>

<?php require_once ("include/footer.php")?>
