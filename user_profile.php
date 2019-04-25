
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
                <a class="login" href="index.php">log out</a>
            </div>
        </div>
    </div>
</div>


<div class="singlebook_details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Single User details</h1>
            </div>
        </div>
    </div>
</div>

<div class="book_container">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contant">
                    <h2>Title</h2>
                    <h3>Sub Title</h3>
                    <h4>Author</h4>
                    <a href="">change profile</a>
                </div>
                <img src="images/book1.jpg" alt="" class="img-thumbnail">

            </div>
            <div class="col-md-8">
                <a href="" class="bookadd">Book Add</a>


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
</div>





<?php require_once ("include/footer.php")?>
