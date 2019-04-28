
<?php require_once ("include/header.php")?>

<?php

session_start();

if(isset($_SESSION["user_id"])){


}else{

    header("location:dataprocess/error_page.php?massage_error=invalid request");
}


?>



<div class="login_container">
    <div class="container">
        <div class="row text-center">
           <div class="col-md-12">
               <a class="login" href="index.php">home</a>
               <a class="regis" href="book_singup_form.php">Book Registration</a>
               <a class="regis" href="user_data_table.php">User Details</a>
               <a class="regis" href="book_details.php">Book Details</a>
           </div>
        </div>
    </div>
</div>


<div class="user_details">
    <div class="container">
        <div class="row">
            <h2>All User Details</h2>

            <h3>
                <?php

                if(isset($_GET["massage"])){
                    echo $_GET["massage"];
                }elseif(isset($_GET["massagedelete"])){
                    echo $_GET["massagedelete"];
                }
                ?>
            </h3>

            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">S.N</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">profile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action1</th>
                    <th scope="col">Action2</th>
                </tr>
                </thead>
                <tbody>

                <?php

                require_once("dataprocess/config.php");

                $showq = "select * from lib";
                $runq = mysqli_query($connect,$showq);

                if($runq==true){
                    $sri=1;
                    while($get = mysqli_fetch_array($runq)){ ?>

                        <tr>
                            <th scope="row"><?php echo $get['id']; ?></th>
                            <td><?php echo $sri; $sri++; ?></td>
                            <td><?php echo $get['fname']; ?></td>
                            <td><?php echo $get['lname']; ?></td>
                            <td><?php echo $get['email']; ?></td>
                            <td><?php echo $get['role']; ?></td>
                            <td><img src="images/<?php echo $get['profile']?>" alt="" class="img-thumbnail"></td>
                            <td><?php echo $get['pass']; ?></td>
                            <td>
                                <a href="user_edit.php?edit_id=<?php echo $get['id']; ?>">Edit</a>|
                                <a href="dataprocess/user_delete.php?delete_id=<?php echo $get['id']; ?>    ">Delete</a>
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







<?php require_once ("include/footer.php")?>
