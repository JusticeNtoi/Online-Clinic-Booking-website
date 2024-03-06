<!DOCTYPE Html>

<Html>

<head>

<style>

form {
  background-image: url('n.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
}
body {
	background-image: url('nurse.jpg');
	background-size: cover;	
}
ul
	{
		margin: 0px;
		padding: 0px;
		list-style: none;
	}
ul li
	{
		float: left;
		width: 150px;
		height: 40px;
		background-color: white;
		opacity: .8;
		line-height: 40px;
		font-size: 23px;
		text-align: center;
		margin-right: 2px;
	}
ul li a
	{
		text-decoration: none;
		color: black;
		display: block;
		}
	ul li a:hover
	{
		background-color: #3399FF;
	}
</style>
</head>

<body >
<ul>
<li><a href="Homepage.php">HOME page</a></li>
</ul>
<h1 style="text-align:center" >Botho University Clinic Booking </h1>

<p style="text-align:center">Please Enter Your Login Details</p>
<FONT size="4">

<FORM style="text-align:center" method="post" action="nurseprocess.php">
	<br><br>
	NURSE ID:<br>
	<input type="text" name="nurse_id" placeholder="Enter your ID" required>
	<br><br>
	PASSWORD:<br>
	<input type="password" name="password" placeholder="Enter your password" required>
	<br><br>
	<input type="submit" name="login" value="Login">
	<br><br><br><br>
</FORM>
</FONT>

<h2>
<p style="text-align:center" ><a href="nurseregister form.php"><b>Sign up</b></p>
</h2>

</body>
</Html>