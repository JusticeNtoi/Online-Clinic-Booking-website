<!DOCTYPE Html>

<Html>

<head>

<style>

form {
  background-image: url('vlad2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
}
body {
	background-image: url('vlad1.jpg');
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
		background-color: #3399FF;
		opacity: .8;
		line-height: 40px;
		font-size: 23px;
		text-align: center;
	}
ul li a
	{
		text-decoration: none;
		color: black;
		display: block;
		}
	ul li a:hover
	{
		background-color: white;
	}
</style>
</head>

<body >
<ul>
<li><a href="Homepage.php">HOME page</a></li>
</ul>
<br>
<h1 style="text-align:center" >Botho University Clinic Booking </h1>

<p style="text-align:center">Enter Your Login Details</p>
<FONT size="4">

<FORM style="text-align:center" method="post" action="adminprocess.php">
	<br>
	ADMIN ID:<br>
	<input type="text" name="admin_id" placeholder="Enter your ID" required>
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
<p style="text-align:center" ><b>Botho university administration</b></p>
</h2>

</body>
</Html>