
<?php require_once ("include/header.php")?>





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
            <h1>User details</h1>
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
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
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
                        <a href="user_edit.php">Edit</a>|
                        <a href="user_delete.php">Delete</a>
                    </td>
                    <td>
                        <a href="user_edit.php">Edit</a>|
                        <a href="user_delete.php">Delete</a>
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
                        <a id="edit" href="user_edit.php">Edit</a>|
                        <a id="delete" href="user_delete.php">Delete</a>
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
                        <a href="user_edit.php">Edit</a>|
                        <a href="user_delete.php">Delete</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>




<?php require_once ("include/footer.php")?>
