<?php

include_once 'del con.php';

$nurse_id = $_GET['nurse_id'];
$sql="SELECT * FROM nurseclinic WHERE nurse_id=$nurse_id";

$result = mysqli_query($conn,$sql);

while($res=mysqli_fetch_array($result))
{
	$first_name = $res['first_name'];
	$last_name = $res['last_name'];
	$nurse_id = $res['nurse_id'];
	$email = $res['email'];
	$password = $res['password'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="remove ac.php">Home</a>
	<br><br>
	
	<form name="form1" method="post" action="nupdate2.php">
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
				<td>Nurse ID</td>
				<td><input type="text" name="nurse_id" value="<?php echo $nurse_id;?>"></td>
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
				<td><input type="hidden" name="nurse_id" value=<?php echo $_GET['nurse_id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
		
		</body>
		</html>