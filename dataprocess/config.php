<?php


    $host="localhost";
    $user="hkr";
    $pass="hkr1234";
    $db="libone";

    $connect = mysqli_connect($host,$user,$pass,$db);


    if(!$connect==true){
        echo "<h1>error connect database</h1>";
    }






?>