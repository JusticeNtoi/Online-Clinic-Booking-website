<!DOCTYPE html>
<html>

  <head>
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
	font-style:Times New Roman;
	height:450px;
    }
    </style>
  </head>
  
<body style="background-color:pink">

<header>
    <div class="container">
      <div class="image">
        <img src="BOTHO - logo.png">
      </div>
      <div class="text">
      <h1>Botho University Clinic Booking</h1>
	<nav>
    <ul>
	<li><a href="logout.php">Logout</a></li>
	<li><a href="News.php">News</a></li>
    <li><a href="#">About us</a></li>
	<li><a href="approved booking.php">Approved</a></li>
	<li><a href="appointment.php">Book Appointment</a></li>
    <li><a href="main.php">Home</a></li>
    </ul>
      </div>
    </div>
    </nav>
</header>

<section class="first">
<h1>About BU Clinic</h1>
<Font size="5">
<p style="text-align:left">Botho University clinic Provide first aid or emergency care to sick or injured students.<br>
Assess students, to detect early signs and symptoms of health problems, which will affect learning.<br>
Monitor and maintain growth and development of students.<br>
Administer nursing care appropriate to the identified nursing needs of the students.<br>
Plan, implement and evaluate health education programme for students.<br>
Plan, implement and evaluate vaccination programmes for all students in the School.<br>
Maintain and submit required records and reports as per Department of Health guidelines.<br></p>
<p><em>For more info</em>
<br>Email: bothoclinic@bothouniversity.ac.bw</a></p>
</Font>
</section>

</body>
</html>
