<?php session_start() ?>
<?php

$_SESSION["email"] = null;
$_SESSION["firstName"] = null;
$_SESSION["lastName"] = null;
$_SESSION["db_phone"] = null;




header("location: ../home.php")

?>