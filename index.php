
<?php require_once ("include/header.php")?>


<?php


session_start();

if (isset($_SESSION["user_id"])) {

    header("location:admin_profile.php");
}


?>


<div class="login_container">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <a class="login" href="login.php">login</a>
                <a class="regis" href="user_signup_form.php">Registration</a>
            </div>
        </div>
    </div>
</div>





<?php require_once ("include/footer.php")?>
