<?php
require_once("config.php");

if(isset($_GET["delete_id"])){

    $did = $_GET["delete_id"];

    $delete_query="DELETE FROM lib WHERE id=$did";
    $runFrom = mysqli_query($connect,$delete_query);

    if($runFrom==true){

        header("location: /library/admin_profile.php?massagedelete=delete sucessfull");
    }else{
        echo "delete unsucessfull";
    }









}


?>