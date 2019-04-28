

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

if(isset($_GET["delete_id"])){

    $did = $_GET["delete_id"];

    $delete_query="DELETE FROM lib_book WHERE id=$did";
    $runFrom = mysqli_query($connect,$delete_query);

    if($runFrom==true){

        header("location: /library/admin_profile.php?massagedelete=delete sucessfull");
    }else{
        echo "delete unsucessfull";
    }









}


?>