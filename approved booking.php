<!DOCTYPE html>
<html>

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
       .container {
        display: flex;
        align-items: center;
        justify-content: center;
      }
      img {
        max-width: 100%
      }
      .image {
        flex-basis: 10%
      }
      .text {
        font-size: 25px;
        padding-left: 20px;
	  }
	  body{
	  height:100%;
	  width:100;
      }
      header{
	  background-color:LightPink;
	  height:20%;
	  width:100%;
	  }
	  nav{
	background-color:LightPink;
	height:60%;
	width:100%;
	top:50%;
	position:float;
	font-family:Times New Roman;
	font-weight:bold;
	font-size:20px;
	margin:0px;
    }
	nav ul li{
	float:right;
	margin:2px;
	display:block;
    }
	nav ul li a{
	color:black;
	background-color:PaleVioletRed;
	text-decoration:none;
	padding:0px 10px 0px 10px;
	margin:2px;
	border-radius:10px;
    }
	nav ul li a:hover{
	background-color:white;
    }
	nav ul li a:active{
	background-color:DeepPink;
    }
	section.first{
	background-image:url('covid.jpg');
	background-position:center;
	background-repeat:no-repeat;
	background-size:cover;
	text-align:center;
	font-size:30px;
	color:black;
	height:450px;
	
    }

</style>
	
<?php
include_once("logg.php");
if (isset($_POST['check'])) {
    $student_id    = $_POST['student_id'];

    $result = mysqli_query($mysqli, "select 'student_id' from approved
        where student_id='$student_id'");

    $user_matched = mysqli_num_rows($result);

    if ($user_matched > 0)
	{
		?>
		<script type = "text/javascript">
		alert('Your Appointment has been approved');
		</script>
		<?php
    }
	else {
		?>
		<script type = "text/javascript">
		alert('Sorry You have to book another appointment!!!');
		</script>
	<?php
    }
}
?>
	
</head>
  
<body style="background-color:pink">

<header>
    <div class="container">
      <div class="image">
        <img src="BOTHO - logo.png">
      </div>
      <div class="text">
      <h1>Welcome to BU Clinic Booking</h1>
	<nav>
    <ul>
	<li><a href="logout.php">Logout</a></li>
	<li><a href="News.php">News</a></li>
    <li><a href="About.php">About us</a></li>
	<li><a href="#">Approved</a></li>
	<li><a href="appointment.php">Book Appointment</a></li>
    <li><a href="main.php">Home</a></li>
    </ul>
      </div>
    </div>
    </nav>
</header>

<section class="first">

<h1>Check appointment approval</h1>
<br>
<FORM id="form" name="form" method="post" action="approved booking.php">
STUDENT ID<br>
<input type="text" id="student_id" name="student_id" placeholder="Enter your student ID" required> 
<br>
<input type="submit" name="check" id="submit" value="Check">
<br>
</FORM>

</section>

</body>
</html>
