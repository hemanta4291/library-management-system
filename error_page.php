



<?php require_once("include/header.php") ?>


<div class="container">

    <div class="row text-center">
        <div class="col-md-12">
            <h1 class="invalid-request"><?php

                if(isset($_GET['massage_error'])){ ?>

                    <div class="alert alert-danger" role="alert">
                        Access Not Available............
                    </div>

                <?php } ?>

                </h1>
        </div>
    </div>


</div>



<?php require_once("include/footer.php") ?>
