<?php require_once("include/header.php") ?>

<?php

if(isset($_SESSION["user_id"])){

    echo $_SESSION["user_id"];
}else{

    header("location:dataprocess/error_page.php?massage_error=invalid request");
}


?>
<?php if(isset($_SESSION["role"]) && $_SESSION["role"]==1){ ?>

<div class="from">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-4 mx-auto">

                <?php
                require_once("dataprocess/config.php");

                if(isset($_GET["edit_id"])){

                    $editid=$_GET["edit_id"];

                    $myquery="select * from lib where id=$editid";
                    $runFrom = mysqli_query($connect,$myquery);


                    if($runFrom==true){

                        while($get = mysqli_fetch_array($runFrom)){ ?>


                            <form action="dataprocess/user_update_post.php" enctype="multipart/form-data" method="post">
                                <div class="form-group">
                                    <input type="text" name="fname" value="<?php echo $get['fname'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Frist name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lname" value="<?php echo $get['lname'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last name">
                                </div>
                                <div class="form-group">

                                    <input type="email" name="email" value="<?php echo $get['email'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <img src="images/<?php echo $get['profile'] ?>" alt="">
                                    <input type="file" name="user_img" class="form-control" value="book picture" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Author Name">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="role" id="exampleFormControlSelect1">
                                        <option value="1" >admin</option>
                                        <option value="2">User</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="pass" value="<?php echo $get['pass'] ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <input type="hidden" name="editingid" value="<?php echo $get['id'] ?>">
                                <button type="submit" name="update" class="btn btn-primary">sign up</button>

                            </form>



                      <?php  } } } ?>

            </div>

        </div>
    </div>
</div>

<?php }else{

    header("location:error_page.php?massage_error");
    ?>
<?php } ?>

<?php require_once("include/footer.php") ?>





