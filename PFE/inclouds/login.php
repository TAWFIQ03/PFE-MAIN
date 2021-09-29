<?php include "./db.php" ?>
<?php session_start() ?>
<?php
if (isset($_POST['btlogin'])) {

    $email =  $_POST['email'];
    $passwoord =  $_POST['passwoord'];
    $email = mysqli_real_escape_string($conn, $email);
    $passwoord = mysqli_real_escape_string($conn, $passwoord);


    $query = "SELECT * FROM `client` WHERE `email`= '{$email}' ";
    $select_client = mysqli_query($conn, $query);
    if (!$select_client) {
        die("QUERY FAILED" . mysqli_errno($conn));
    }
    while ($row = mysqli_fetch_array($select_client)) {
        $db_id = $row["ID"];
        $db_email = $row["email"];
        $db_password = $row["password"];
        $db_firstName = $row["firstName"];
        $db_lastName = $row["lastName"];
        $db_phone = $row["phone"];
    }

    if ($email === $db_email && $passwoord === $db_password) {

        if ($email === "aharmim@gmail.com") {
            $_SESSION["ID"] = $db_id;
            $_SESSION["email"] = $db_email;
            $_SESSION["firstName"] = $db_firstName;
            $_SESSION["lastName"] = $db_lastName;
            $_SESSION["db_phone"] = $db_phone;
            header("location: ../admin/admin.php");
        } else {
            $_SESSION["ID"] = $db_id;
            $_SESSION["email"] = $db_email;
            $_SESSION["firstName"] = $db_firstName;
            $_SESSION["lastName"] = $db_lastName;
            $_SESSION["db_phone"] = $db_phone;

            header("location: ../home.php");
        }
    } else {
        header("location: ../index.php");
    }
}


?>