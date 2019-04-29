<?php require_once ("include/header.php")?>

<?php

if(isset($_SESSION["user_id"])){

    $get_id = $_SESSION["user_id"];
}else{

    header("location:dataprocess/error_page.php?massage_error=invalid request");
}


?>

<?php

    if($_GET['edit_id']){
        $book_id = $_GET['edit_id'];
    }

    require_once("dataprocess/config.php");
    $showq = "select lib_book.*, lib.fname from lib_book left join lib on lib_book.creator_id=lib.id where lib_book.id=$book_id ";
    $runq = mysqli_query($connect,$showq);
    $get_data = mysqli_fetch_array($runq);

?>



<div class="from">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-4 mx-auto">
                <form action="dataprocess/book_update_post.php" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <input type="text" name="title" value="<?php echo $get_data['title'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <input type="text" name="sub_title" value="<?php echo $get_data['sub_title'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sbu title">
                    </div>
                    <div class="form-group">
                        <img src="images/<?php echo $get_data['image'];?>" alt="">
                        <input type="file" name="book_img" class="form-control" value="book picture" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Author Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="author_name" value="<?php echo $get_data['author'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Author Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="creator_name" value="<?php echo $get_data['fname'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Author Name">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="book_edit_id" value="<?php echo $get_data['id'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Author Name">
                    </div>
                    <button type="submit" name="book_sinup" class="btn btn-primary">sign up</button>

                </form>
            </div>

        </div>
    </div>
</div>
<?php require_once ("include/footer.php")?>
