<html>

<body>

<?php

include_once 'del con.php';

$student_id = $_GET ['student_id'];
$sql = "DELETE FROM approved WHERE student_id = $student_id";

$result = mysqli_query($conn, $sql);

header('location: booked.php');
?>
</body>
</html>