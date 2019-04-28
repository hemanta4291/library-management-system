
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
            <h2>All Book Details</h2>

            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">S.N</th>
                    <th scope="col">book title</th>
                    <th scope="col">Sub title</th>
                    <th scope="col">image</th>
                    <th scope="col">author</th>
                    <th scope="col">creator</th>
                </tr>
                </thead>
                <tbody>


                <?php

                require_once("dataprocess/config.php");

                $showq = "select lib_book.*, lib.fname from lib_book left join lib on lib_book.creator_id=lib.id ";
                $runq = mysqli_query($connect,$showq);

                if($runq==true){
                    $sri=1;
                    while($get = mysqli_fetch_array($runq)){ ?>

                        <tr>
                            <th scope="row"><?php echo $get['id']; ?></th>
                            <td><?php echo $sri; $sri++; ?></td>
                            <td><?php echo $get['title']; ?></td>
                            <td><?php echo $get['sub_title']; ?></td>
                            <td><img src="images/<?php echo $get['image']; ?>" alt=""></td>
                            <td><?php echo $get['author']; ?></td>
                            <td><?php echo $get['fname']; ?></td>

                            <td>
                                <a href="book_edit.php?edit_id=<?php echo $get['id']; ?>">Edit</a>|
                                <a href="dataprocess/book_delete.php?delete_id=<?php echo $get['id']; ?>">Delete</a>
                            </td>
                        </tr>


                    <?php } } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>






<?php require_once ("include/footer.php")?>
