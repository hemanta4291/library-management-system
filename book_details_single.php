
<?php require_once ("include/header.php")?>

<?php

session_start();

if(isset($_SESSION["user_id"])){

    echo $_SESSION["user_id"];
}else{

    header("location:dataprocess/error_page.php?massage_error=invalid request");
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


<div class="singlebook_details">
    <div class="container">
        <div class="row">
            <h1>Single Book details</h1>
        </div>
    </div>
</div>

<div class="book_container">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="images/book1.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="col-md-6">
                <div class="contant">
                    <h2>Title</h2>
                    <h3>Sub Title</h3>
                    <h4>Author</h4>
                </div>
            </div>
        </div>
    </div>
</div>





<?php require_once ("include/footer.php")?>
