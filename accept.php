
<?php

include_once 'del con.php';

$student_id = $_GET ['student_id'];
$sql = "INSERT INTO approved SELECT * FROM bookings WHERE student_id = $student_id";

$result = mysqli_query($conn, $sql);

header('location: approve.php');

$student_id = $_GET ['student_id'];
$sql = "DELETE FROM bookings WHERE student_id = $student_id";

$result = mysqli_query($conn, $sql);

?>
