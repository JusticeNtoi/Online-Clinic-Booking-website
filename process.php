<?php
session_start();
include_once("logg.php");
if (isset($_POST['login'])) {
    $student_id    = $_POST['student_id'];
    $password = $_POST['password'];

    $result = mysqli_query($mysqli, "select 'student_id', 'password' from clinic
        where student_id='$student_id' and password='$password'");

    $user_matched = mysqli_num_rows($result);

    if ($user_matched > 0) {

        $_SESSION["student_id"] = $student_id;
        header("location: main.php");
    } else {
        echo "User username or password is not matched <br/><br/>";
    }
}
?>