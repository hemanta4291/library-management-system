
<?php require_once ("include/header.php")?>

<?php

session_start();

if(isset($_SESSION["user_id"])){

    $get_active_id = $_SESSION["user_id"];
}else{

    header("location:dataprocess/error_page.php?massage_error=invalid request");
}


?>

<?php

 require_once ("dataprocess/config.php");

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $book_img = $_FILES["book_img"]["name"];
        $image_tmp = $_FILES["book_img"]["tmp_name"];
        $location = "images/";
        $img_uniq_name = uniqid() . ".jpg";


        if($book_img == ''){
            header("location:admin_profile.php");
        }else{
            move_uploaded_file($image_tmp, $location . "$img_uniq_name");
            $showq = "update lib set profile='$img_uniq_name' where id=$get_active_id";
            $runq = $connect->query($showq);

            if($runq){
                header("location:admin_profile.php");
            }else{
                echo "not data sent";
            }

        }

    }


?>


<div class="from">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-4 mx-auto">
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <input type="file" name="book_img" class="form-control" value="book picture" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Author Name">
                    </div>
                    <button type="submit" name="book_sinup" class="btn btn-primary">sign up</button>

                </form>
            </div>

        </div>
    </div>
</div>
<?php require_once ("include/footer.php")?>