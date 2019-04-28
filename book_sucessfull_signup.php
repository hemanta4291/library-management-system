


<?php require_once ("include/header.php")?>

<?php

session_start();

if(isset($_SESSION["user_id"])){

    echo $_SESSION["user_id"];
}else{

    header("location:dataprocess/error_page.php?massage_error=invalid request");
}


?>

<div class="container successfull">

    <div class="row text-center">
        <div class="col-md-12">
           <h1><?php

               if(isset($_GET['massage'])){

                   echo $_GET['massage'];

               }

               ?></h1>
        </div>
    </div>


</div>


<div class="login_container">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <a class="login" href="admin_profile.php">admin home</a>
            </div>
        </div>
    </div>
</div>


<?php require_once ("include/footer.php")?>
