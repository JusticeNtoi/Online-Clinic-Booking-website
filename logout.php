<?php
session_start();
unset($_SESSION["student_id"]);
unset($_SESSION["password"]);
header("Location: login form.php");
?>