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
	background-image:url('coved.jpg');
	background-position:center;
	background-repeat:no-repeat;
	background-size:cover;
	text-align:center;
	font-size:60px;
	color:white;
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
	<li><a href="nurselogout.php">Logout</a></li>
	<li><a href="approve.php">Approve Appointments</a></li>
	<li><a href="booked.php">Booked Appointments</a></li>
    <li><a href="#">Home</a></li>
    </ul>
      </div>
    </div>
    </nav>
</header>

<section class="first">
<br>
<h1><em>Taking Care Of Lives</em></h1>
<br>
<p style="color:DeepPink"><sub><em> health Care Centre</em></sub></p>
</section>

</body>
</html>
