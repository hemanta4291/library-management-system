<?php require_once("include/header.php") ?>



<div class="from">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-4 mx-auto">
                <form action="dataprocess/forgate_pass_post.php" method="post">
                    <div class="form-group">
                        <input type="email" name="old_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="old_pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Old Pass">
                    </div>
                    <div class="form-group">
                        <input type="password" name="new_pass" class="form-control" id="exampleInputPassword1" placeholder="New Pass">
                    </div>
                    <button type="submit" name="forgate" class="btn btn-primary">update</button>
                </form>
            </div>

        </div>
    </div>
</div>






<?php require_once("include/footer.php") ?>
