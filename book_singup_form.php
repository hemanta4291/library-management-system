<?php require_once ("include/header.php")?>


<div class="user_sinup">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h1>Book Regintration form</h1>
            </div>
        </div>
    </div>
</div>
<div class="login_container">
    <div class="container">
        <div class="row text-center">
           <div class="col-md-12">
               <a class="login" href="index.php">home</a>
               <a class="login" href="login.php">login</a><a class="regis" href="user_signup_form.php">User Registration</a>
               <a class="regis" href="user_data_table.php">User Details</a>
               <a class="regis" href="book_details.php">Book Details</a>
           </div>
        </div>
    </div>
</div>


<div class="from">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-4 mx-auto">
                <form>
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <input type="text" name="sub_title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sbu title">
                    </div>
                    <div class="form-group">
                        <input type="file" name="book_img" class="form-control" value="book picture" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Author Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="author_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Author Name">
                    </div>
                    <button type="submit" class="btn btn-primary">sign up</button>

                </form>
            </div>

        </div>
    </div>
</div>






<?php require_once ("include/footer.php")?>
