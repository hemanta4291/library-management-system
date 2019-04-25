<?php
require_once("config.php");

if(isset($_REQUEST["singup"])){


    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $role=$_POST["role"];
    $pass=$_POST["pass"];
    $checpas=md5($pass);


        $usrFrom = "insert into lib(fname,lname,email,role,pass) values ('$fname','$lname','$email','$role','$checpas')";
        $runFrom = mysqli_query($connect,$usrFrom);


        if($runFrom==true){

            header("location: /library/sucessfull_signup.php?massage=sinup sucessfull");
        }else{
            echo "not sinup";
        }









    }


?>