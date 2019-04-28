

<?php
require_once("config.php");


session_start();

if(isset($_SESSION["user_id"])){

    $get_id = $_SESSION["user_id"];
}else{

    header("location:dataprocess/error_page.php?massage_error=invalid request");
}


if(isset($_REQUEST["book_sinup"])){


        $title = $_POST["title"];
        $subtitle = $_POST["sub_title"];
        $book_img = $_FILES["book_img"]["name"];
        $image_tmp = $_FILES["book_img"]["tmp_name"];
        $location = "../images/";
        $img_uniq_name = uniqid() . ".jpg";
        $author = $_POST["author_name"];

        move_uploaded_file($image_tmp, $location . "$img_uniq_name");

        if($title=='' or $subtitle=='' or $book_img=='' or $author==''){

            header("location:../book_singup_form.php?mass=must be field not empty");

        }else{

            $usrFrom = "insert into lib_book(title,sub_title,image,author,creator_id) values ('$title','$subtitle','$img_uniq_name','$author','$get_id')";
            $runFrom = $connect->query($usrFrom);

            if($runFrom==true){

                header("location: /library/book_sucessfull_signup.php?massage=book sinup sucessfull");
            }else{
                echo "not sinup";
            }

        }



    }


?>