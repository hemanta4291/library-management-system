

<?php

if(isset($_POST['forgate'])){

    $old_pass = $_POST['old_pass'];
    $old_email = $_POST['old_email'];
    $new_pass = $_POST['new_pass'];
    $checkpass = md5($old_pass);
    $new_pass_chce = md5($new_pass);


    require_once("config.php");


    $showq = "select * from lib where email='$old_email' and pass='$checkpass'";
    $runq = mysqli_query($connect, $showq);
    $get_data = mysqli_num_rows($runq);
    if ($get_data===1) {
        $get_id = mysqli_fetch_assoc($runq );

        $pass_up_id = $get_id["id"];

        $update = "update lib set pass='$new_pass_chce' where id=$pass_up_id";

        $runq_up = mysqli_query($connect, $update);

        if($runq_up){
            header("location:../login.php?updatepass");
        }
    }


}

?>