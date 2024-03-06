<!DOCTYPE Html>

<Html>

<head>
<script language="javascript" type="text/javascript">

function check()
{   
 var num1 = document.getElementById("password").value;
 var num2 = document.getElementById("comfirm").value;
 var num3 = document.getElementById("student_id").value;
if(num1 != num2)
	{
		document.getElementById("messages").innerHTML="Password do not match";
		return false;
	}
if(num1.length < 4)
{
	document.getElementById("messages").innerHTML="Password should be above 4 characters";
	return false;
}
if(num1.length > 10)
{
	document.getElementById("messages").innerHTML="Password should be less than 11 characters";
	return false;
}

if(num3.length != 7)
{
	document.getElementById("messages").innerHTML="Student ID should be 7 characters";
	return false;
}

}
</script>

<style>
form {
  background-image: url('cove.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
}
body {
    background-image:url('cov.jpg');
	background-size: cover;	
}
</style>

</Head>

<body >
<br>
<h1 > REGISTRATION FORM</h1>
<FONT size="4">

<FORM id="form" name="form" method="post" action="register.php" onsubmit="return check()">
<fieldset>
    FIRST NAME:<br>
	<input type="text" name="first_name" placeholder="Enter your first name" required>
	<br>
	LAST NAME:<br>
	<input type="text" name="last_name" placeholder="Enter your last name" required>
	<br>
	STUDENT ID:<br>
	<input type="text" id="student_id" name="student_id" placeholder="Enter your student ID" required> 
	<br>
	EMAIL:<br>
	<input type="email" name="email" placeholder="Enter your Email" required>
	<br>
	<label>
	PASSWORD:<br>
	<input type="password" id="password" name="password" placeholder="Enter your password" required> </label>
	<br>
	<label>
	COMFIRM:<br>
	<input type="password" id="comfirm" name="comfirm" placeholder="comfirm your password"  required> </span>
	</label><br>
	<span id="messages" style="color:red;"> </span> 
	<br><br>
	<input type="submit" name="save" id="submit" value="Submit">
	<br>
</fieldset>	
</FONT>

</FORM>

<FONT size="4">
<p style="text-align:center"><em>Return to </em><a href="login form.php">Login Page</a></p>
</FONT>	

</body>
</Html>