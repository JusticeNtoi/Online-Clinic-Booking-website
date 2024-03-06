<?php
include_once 'nurseconnect.php';
if(isset($_POST['save']))
{
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$nurse_id = $_POST['nurse_id'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql = "INSERT INTO nurseclinic (first_name,last_name,nurse_id,email,password)
	VALUES ('$first_name','$last_name','$nurse_id','$email','$password')";
	if(mysqli_query($conn, $sql))
	{
	?>
	<script type = "text/javascript">
		alert('You have Successfuly registered');
	</script>
	<?php
	}
	else
	{
		?>
		<script type = "text/javascript">
			alert('Error: The User alredy exist');
		</script>
		<?php
	}
}	
?>
