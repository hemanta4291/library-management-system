
<?php require_once ("include/header.php")?>



<?php
session_start();


if(isset($_SESSION["user_id"])){

    echo $_SESSION["user_id"];
}else{

    header("location:dataprocess/error_page.php?massage_error=error session");
}

?>




<div class="login_container">
    <div class="container">
        <div class="row text-center">
           <div class="col-md-12">
               <a class="login" href="index.php">home</a>
               <a class="login" href="login.php">login</a><a class="regis" href="user_signup_form.php">User Registration</a>
               <a class="regis" href="book_singup_form.php">Book Registration</a>
               <a class="regis" href="user_data_table.php">User Details</a>
               <a class="regis" href="book_details.php">Book Details</a>
           </div>
        </div>
    </div>
</div>


<div class="user_details">
    <div class="container">
        <div class="row text-center">
            <h1>Book details</h1>
        </div>
    </div>
</div>

<div class="user_table">
    <div class="container">
        <div class="row">
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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>
                        <a href="book_singup_form.php">Create</a>|
                        <a href="book_details_single.php">Read</a>
                    </td>
                    <td>
                        <a href="book_edit.php">Edit</a>|
                        <a href="book_delete.php">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>
                        <a href="book_singup_form.php">Create</a>|
                        <a href="book_details_single.php">Read</a>
                    </td>
                    <td>
                        <a id="edit" href="book_edit.php">Edit</a>|
                        <a id="delete" href="book_delete.php">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>
                        <a href="book_singup_form.php">Create</a>|
                        <a href="book_details_single.php">Read</a>
                    </td>
                    <td>
                        <a href="book_edit.php">Edit</a>|
                        <a href="book_delete.php">Delete</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>




<?php require_once ("include/footer.php")?>
