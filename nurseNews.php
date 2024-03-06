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
	background-color:white;
	background-position:center;
	background-repeat:no-repeat;
	background-size:cover;
	text-align:center;
	font-size:60px;
	color:black;
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
	<li><a href="nurselogin.php">Logout</a></li>
	<li><a href="#">News</a></li>
	<li><a href="approve.php">Approve Appointments</a></li>
	<li><a href="booked.php">Booked Appointments</a></li>
    <li><a href="nursemain.php">Home</a></li>
    </ul>
      </div>
    </div>
    </nav>
</header>

<section class="first">
<br>
<h1>N News</h1>
<br>
</section>

</body>
</html>
