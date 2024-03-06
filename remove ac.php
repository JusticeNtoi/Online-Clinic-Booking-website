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
	background-color:gray;
	background-position:center;
	background-repeat:no-repeat;
	background-size:cover;
	text-align:center;
	font-size:26px;
	color:black;
	height:100%;
	
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
	<li><a href="adminlogin.php">Logout</a></li>
	<li><a href="#">Nurses Accounts</a></li>
	<li><a href="approve ac.php">Student Accounts</a></li>
    <li><a href="adminmain.php">Home</a></li>
    </ul>
      </div>
    </div>
    </nav>
</header>

<section class="first">

<h1><u>List of Accounts</u></h1>

<?php
  
 $dbc= mysqli_connect('localhost','root','','bothoclinic'); 
$sql= "SELECT * FROM nurseclinic";

$result= mysqli_query($dbc,$sql) or die("bad query");

echo "<table border='1'>";
echo "<tr><td> First Name</td> <td> Last Name</td><td> Nurse ID</td><td> Email</td><td> Password</td><td>Update</td><td>Delete</td></tr>";
while ($row =mysqli_fetch_assoc($result)) {
echo "<tr><td> {$row['first_name']}</td> <td> {$row['last_name']}</td><td> {$row['nurse_id']} </td><td> {$row['email']}</td><td> {$row['password']}</td><td>
<a href='nupdate.php?nurse_id=$row[nurse_id]'>Click here to update</a></td><td><a href='ndelete.php?nurse_id=$row[nurse_id]'>Delete Record</a></td></tr>";
}
echo"</table>";

?>
<br>
</section>

</body>
</html>
