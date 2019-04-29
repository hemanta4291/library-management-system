<?php
require_once("config.php");

if(isset($_REQUEST["singup"])){


    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $role=$_POST["role"];
    $pass=$_POST["pass"];
    $checpas=md5($pass);

    if($fname=='' || $lname=='' || $email=='' || $role==''|| $pass=='' ){

        header("location:../user_signup_form.php?signup_msg=field must be not empty");

    }else{

        $usrFrom1 = "select * from lib where email='$email'";
        $runFrom1 = mysqli_query($connect,$usrFrom1);
        $row_check = mysqli_num_rows($runFrom1);
        if($row_check===1){
            header("location:../user_signup_form.php?email_msg=email already exit");

        }else{

            $usrFrom = "insert into lib(fname,lname,email,role,pass) values ('$fname','$lname','$email','$role','$checpas')";
            $runFrom = mysqli_query($connect,$usrFrom);


            if($runFrom==true){

                header("location: /library/sucessfull_signup.php?massage=sinup sucessfull");
            }else{
                echo "not sinup";
            }
        }


    }



    }


?>