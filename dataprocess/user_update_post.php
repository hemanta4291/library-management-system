
<?php

session_start();

if(isset($_SESSION["user_id"])){

    echo $_SESSION["user_id"];
}else{

    header("location:dataprocess/error_page.php?massage_error=invalid request");
}


?>


<?php
require_once("config.php");

if(isset($_POST["update"])){

    $getid = $_POST["editingid"];

    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $role=$_POST["role"];
    $pass=$_POST["pass"];
    $checpas=md5($pass);

    $user_img = $_FILES["user_img"]["name"];
    $image_tmp = $_FILES["user_img"]["tmp_name"];
    $location = "../images/";
    $img_uniq_name = uniqid() . ".jpg";

    if($user_img==''){


        $update_qury="UPDATE lib SET fname='$fname',lname='$lname',email='$email',role='$role',pass='$pass' WHERE id=$getid";
        $runFrom = mysqli_query($connect,$update_qury);


        if($runFrom==true){

            header("location: /library/admin_profile.php?massage=update sucessfull");
        }else{
            echo "update not sucessfull";
        }

    }else{

        move_uploaded_file($image_tmp, $location . "$img_uniq_name");

        $update_qury="UPDATE lib SET fname='$fname',lname='$lname',email='$email',role='$role',pass='$pass',profile='$img_uniq_name' WHERE id=$getid";
        $runFrom = mysqli_query($connect,$update_qury);


        if($runFrom==true){

            header("location: /library/admin_profile.php?massage=update sucessfull");
        }else{
            echo "update not sucessfull";
        }

    }

}


?>