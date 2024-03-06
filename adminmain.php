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
		color:#336699;
	  }
	  body{
	  height:100%;
	  width:100;
      }
      header{
	  background-image:url(dark.jpg);
	  height:20%;
	  width:100%;
	  }
	  nav{
	background-image:url(dark.jpg);
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
	background-color:#336699;
	text-decoration:none;
	padding:0px 10px 0px 10px;
	margin:2px;
	border-radius:10px;
    }
	nav ul li a:hover{
	background-color:#66CCFF;
    }
	nav ul li a:active{
	background-color:#993366;
    }
	section.first{
	background-image:url('logc1.jpg');
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
  
<body style="background-image:url('vlad.jpg')">

<header>
    <div class="container">
      <div class="image">
        <img src="BOTHO - logo.png">
      </div>
      <div class="text">
      <h1>Botho University Clinic Booking</h1>
	<nav>
    <ul>
	<li><a href="adminlogout.php">Logout</a></li>
	<li><a href="remove ac.php">Nurses Accounts</a></li>
	<li><a href="approve ac.php">Student Accounts</a></li>
    <li><a href="#">Home</a></li>
    </ul>
      </div>
    </div>
    </nav>
</header>

<section class="first">
<br>
<h1>Botho Clinic Administration</h1>
<br>
</section>

</body>
</html>
