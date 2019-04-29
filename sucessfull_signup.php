


<?php require_once ("include/header.php")?>


<div class="container successfull">

    <div class="row text-center">
        <div class="col-md-12">
           <h1><?php

               if(isset($_GET['massage'])){

                   echo $_GET['massage'];

               }
               ?></h1>
        </div>
    </div>


</div>

<?php require_once ("include/footer.php")?>
