<?php
session_start();
include_once("adminlogg.php");
if (isset($_POST['login'])) {
    $admin_id    = $_POST['admin_id'];
    $password = $_POST['password'];

    $result = mysqli_query($mysqli, "select 'admin_id', 'password' from admin
        where admin_id='$admin_id' and password='$password'");

    $user_matched = mysqli_num_rows($result);

    if ($user_matched > 0) {

        $_SESSION["admin_id"] = $admin_id;
        header("location: adminmain.php");
    } else {
        echo "User admin ID or password is not matched <br/><br/>";
    }
}
?>