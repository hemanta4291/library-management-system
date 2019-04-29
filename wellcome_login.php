
<?php require_once ("include/header.php")?>

<?php

    if(isset($_SESSION["user_id"])){

        $get_id = $_SESSION["user_id"];
        echo $role1 = $_SESSION["role"];


    }else{

        header("location:dataprocess/error_page.php?massage_error=invalid request");
    }


?>

<div class="user_details">
    <div class="container">
        <div class="row">

            <?php

            require_once("dataprocess/config.php");

            $showq = "select * from lib where id=$get_id";
            $runq = mysqli_query($connect,$showq);
            $get_value = mysqli_fetch_array($runq);

            ?>


            <h2>welcome to <?php echo $get_value['fname']; ?></h2>
        </div>
    </div>
</div>


<?php require_once ("include/footer.php")?>
