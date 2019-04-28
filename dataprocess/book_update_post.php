
<?php

session_start();

if(isset($_SESSION["user_id"])){

}else{

    header("location:dataprocess/error_page.php?massage_error=invalid request");
}


?>


<?php
require_once("config.php");

if(isset($_POST["book_sinup"])){

    $getid = $_POST["book_edit_id"];

    $title=$_POST["title"];
    $sub_title=$_POST["sub_title"];
    $author=$_POST["author_name"];
    $creator=$_POST["creator_name"];

    $book_img = $_FILES["book_img"]["name"];
    $image_tmp = $_FILES["book_img"]["tmp_name"];
    $location = "../images/";
    $img_uniq_name = uniqid() . ".jpg";

    if($book_img==''){


        $update_qury="UPDATE lib_book set title='$title',sub_title='$sub_title',
                    author='$author' WHERE id=$getid";
        $runFrom = mysqli_query($connect,$update_qury);


        if($runFrom==true){

            header("location: /library/admin_profile.php?massage=update sucessfull");
        }else{
            echo "update not sucessfull";
        }

    }else{

        move_uploaded_file($image_tmp, $location . "$img_uniq_name");

        $update_qury="UPDATE lib_book set title='$title',sub_title='$sub_title',
                    image='$img_uniq_name',author='$author' WHERE id=$getid";
        $runFrom = mysqli_query($connect,$update_qury);


        if($runFrom==true){

            header("location: /library/admin_profile.php?massage=update sucessfull");
        }else{
            echo "update with not sucessfull";
        }

    }

}


?>