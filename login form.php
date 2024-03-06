<!DOCTYPE Html>

<Html>

<head>

<script type = "text/javascript" >
function Backprevent()
{
	window.history.forward();
}
setTimeout("Backprevent()", 0);
window.onload = function () { null };
</script>

<style>

form {
  background-image: url('space.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
}
body {
	background-image: url('logc.jpg');
	background-size: cover;	
}
</style>
</head>

<body >
<br> 
<h1 style="text-align:center" >Botho University Clinic Booking </h1>

<p style="text-align:center">Please Enter Your Login Details</p>
<FONT size="4">

<FORM style="text-align:center" method="post" action="process.php">
	<br>
	STUDENT ID:<br>
	<input type="text" name="student_id" placeholder="Enter your Student ID" required>
	<br><br>
	PASSWORD:<br>
	<input type="password" name="password" placeholder="Enter your password" required>
	<br><br>
	<input type="submit" name="login" value="Login">
	<br><br>
</FORM>
</FONT>

<br><br>
<h2>
<p style="text-align:center" ><em> Click </em><a href="register form.php"><b>HERE</b></a><em> to Register</em></p>
</h2>

</body>
</Html>