
<?php require_once ("include/header.php")?>


<?php


if (isset($_SESSION["user_id"])) {

    header("location:admin_profile.php");
}

?>


<?php require_once ("include/footer.php")?>
