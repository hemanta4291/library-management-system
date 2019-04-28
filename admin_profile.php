
<?php require_once ("include/header.php")?>



<?php
require_once("dataprocess/config.php");

session_start();

if(isset($_SESSION["user_id"])){

    $get_active_id = $_SESSION["user_id"];
}else{

    header("location:dataprocess/error_page.php?massage_error=invalid request");
}


?>




<div class="login_container">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <a class="regis" href="book_singup_form.php">Book Registration</a>
                <a class="regis" href="user_data_table.php">User Details</a>
                <a class="regis" href="book_details.php">Book Details</a>
                <a class="regis" href="logout.php">Log Out</a>
            </div>
        </div>
    </div>
</div>


<div class="singlebook_details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Admin details</h1>
            </div>
        </div>
    </div>
</div>

<div class="book_container">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="contant">
                    <?php

                    $showq = "select * from lib where id=$get_active_id";
                    $runq = mysqli_query($connect,$showq);
                    $get_data = mysqli_fetch_array( $runq);
                    ?>
                    <h2><?php echo $get_data['fname']?></h2>
                    <h3><?php echo $get_data['lname']?></h3>
                    <h4><?php echo $get_data['email']?></h4>
                    <a href="admin_change_profile.php">change profile</a>
                </div>
                <img src="images/<?php echo $get_data['profile']?>" alt="" class="img-thumbnail">

            </div>
            <div class="col-md-10">
                <a href="book_singup_form.php" class="bookadd">Book Add</a>
                <h2>Personal Book</h2>

                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">S.N</th>
                        <th scope="col">Book Title</th>
                        <th scope="col">Sub Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">image</th>
                        <th scope="col">Action1</th>
                        <th scope="col">Action2</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    $showq = "select * from lib_book where creator_id=$get_active_id";
                    $runq = mysqli_query($connect,$showq);

                    if($runq==true){
                        $sri=1;
                        while($get = mysqli_fetch_array($runq)){ ?>

                            <tr>
                                <th scope="row"><?php echo $get['id']; ?></th>
                                <td><?php echo $sri; $sri++; ?></td>
                                <td><?php echo $get['title']; ?></td>
                                <td><?php echo $get['sub_title']; ?></td>
                                <td><?php echo $get['author']; ?></td>
                                <td><img src="images/<?php echo $get['image']; ?>" alt=""></td>
                                <td>
                                    <a href="book_edit.php?edit_id=<?php echo $get['id']; ?>">Edit</a>|
                                    <a href="dataprocess/book_delete.php?delete_id=<?php echo $get['id']; ?>">Delete</a>
                                </td>
                                <td>
                                    <a href="user_edit.php">Edit</a>|
                                    <a href="user_delete.php">Delete</a>
                                </td>
                            </tr>


                        <?php } } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


<?php require_once ("include/footer.php")?>
