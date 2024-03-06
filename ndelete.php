<html>

<body>

<?php

include_once 'del con.php';

$nurse_id = $_GET ['nurse_id'];
$sql = "DELETE FROM nurseclinic WHERE nurse_id = $nurse_id";

$result = mysqli_query($conn, $sql);

header('location: remove ac.php');
?>
</body>
</html>