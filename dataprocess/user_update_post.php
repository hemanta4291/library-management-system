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


    $update_qury="UPDATE lib SET fname='$fname',lname='$lname',email='$email',role='$role',pass='$pass' WHERE id=$getid";
    $runFrom = mysqli_query($connect,$update_qury);


    if($runFrom==true){

        header("location: /library/admin_profile.php?massage=update sucessfull");
    }else{
        echo "update not sucessfull";
    }









}


?>