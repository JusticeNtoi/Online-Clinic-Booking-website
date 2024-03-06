<?php

include_once 'del con.php';

$student_id = $_GET['student_id'];
$sql="SELECT * FROM clinic WHERE student_id=$student_id";

$result = mysqli_query($conn,$sql);

while($res=mysqli_fetch_array($result))
{
	$first_name = $res['first_name'];
	$last_name = $res['last_name'];
	$student_id = $res['student_id'];
	$email = $res['email'];
	$password = $res['password'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="approve ac.php">Home</a>
	<br><br>
	
	<form name="form1" method="post" action="update2.php">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="first_name" value="<?php echo $first_name;?>"></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="last_name" value="<?php echo $last_name;?>"></td>
			</tr>
		    <tr> 
				<td>Student ID</td>
				<td><input type="text" name="student_id" value="<?php echo $student_id;?>"></td>
			</tr>
			<tr>
			<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
			<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $password;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="student_id" value=<?php echo $_GET['student_id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
		
		</body>
		</html>