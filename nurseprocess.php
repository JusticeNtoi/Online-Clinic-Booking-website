<?php
session_start();
include_once("nurselogg.php");
if (isset($_POST['login'])) {
    $nurse_id    = $_POST['nurse_id'];
    $password = $_POST['password'];

    $result = mysqli_query($mysqli, "select 'nurse_id', 'password' from nurseclinic
        where nurse_id='$nurse_id' and password='$password'");

    $user_matched = mysqli_num_rows($result);

    if ($user_matched > 0) {

        $_SESSION["nurse_id"] = $nurse_id;
        header("location: nursemain.php");
    } else {
        echo "User username or password is not matched <br/><br/>";
    }
}
?>