

<?php
require_once("config.php");

if(isset($_REQUEST["login"])){


    $email=$_POST["usr_email"];
    $pass=$_POST["usr_password"];
    $checpas=md5($pass);

    if($email=='' || $pass==''){

        header("location:../login.php?massgelogin=field not empty");
    }else{


        $checkuser="select * from lib where email='$email' AND pass='$checpas'";
        $getuser =$connect->query($checkuser);




        if ( $getuser->num_rows > 0) {

            $singleuserdata = $getuser->fetch_assoc();

            session_start();

            $_SESSION["user_id"] = $singleuserdata['id'];
            $_SESSION["fname"] = $singleuserdata['fname'];
            $_SESSION["lname"] = $singleuserdata['lname'];
            $_SESSION["singleemail"] = $singleuserdata['email'];
            $_SESSION["role"] = $singleuserdata['role'];

            header("location:../wellcome_login.php");
        }else{
            header("location:../login.php?login_msg=user name or password invalid");
        }


        //if($runFrom==true){



//           /* header("location:sucessfull_login.php?massage=login sucessfull");*/
//        }else{
//            echo "not login";
//        }


    }












}


?>
