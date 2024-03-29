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
	background-color:Pink;
	background-position:center;
	background-repeat:no-repeat;
	background-size:cover;
	text-align:center;
	font-size:15px;
	color:black;
	height:100%;
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
    <li><a href="About.php">About us</a></li>
	<li><a href="approved booking.php">Approved</a></li>
	<li><a href="#">Book Appointment</a></li>
    <li><a href="main.php">Home</a></li>
    </ul>
      </div>
    </div>
    </nav>
</header>

<section class="first">

<?php

function build_calendar($month, $year){

	$mysqli = new mysqli('localhost','root','','bothoclinic');
	$stmt = $mysqli->prepare('select * from bookings where MONTH(date)=? AND YEAR(date)=?');
	$stmt->bind_param('ss',$month, $year);
	$bookings = array();
	
	if($stmt->execute()){
		
	$result = $stmt->get_result();
	
	if($result->num_rows > 0){
		
	while($row = $result->fetch_assoc()){
		
	$bookings[] = $row['date'];
	}
	$stmt ->close();
	}
	}


	$daysOfWeek =  array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	$firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);
	$numberDays = date('t',$firstDayOfMonth);
	$dateComponents =getdate($firstDayOfMonth);
	$monthName = $dateComponents['month'];
	$dayOfWeek = $dateComponents['wday'];
	$dateToday = date('Y-m-d');
	
	$prev_month = date('m',mktime(0, 0, 0, $month-1, 1, $year));
	$prev_year = date('Y',mktime(0, 0, 0, $month-1, 1, $year));
	$next_month = date('m',mktime(0, 0, 0, $month+1, 1, $year));
	$next_year = date('Y',mktime(0, 0, 0, $month+1, 1, $year));
	$calendar = "<center><h2>$monthName $year</h2>";
	$calendar.= "<a class='btn btn-primary btn-xs' href='?month=".$prev_month."&year=".$prev_year."'>Prev month</a> ";
	$calendar.= "<a class='btn btn-primary btn-xs' href='?month=".date('m')."&year=".date('Y')."'>Current month</a> ";
	$calendar.= "<a class='btn btn-primary btn-xs' href='?month=".$next_month."&year=".$next_year."'>Next Month</a></center>";
	$calendar.= "<br><table class='table table-bordered'>";
	$calendar.= "<tr>";
	foreach($daysOfWeek as $day){
		
	$calendar.="<th class='header'>$day</th>";
	}

	$calendar.="</tr><tr>";
	$currentDay= 1;
	
	if($dayOfWeek > 0){
		
	for($k=0;$k<$dayOfWeek;$k++){
		
	$calendar.="<td class='empty'></td>";
	}
	}

	$month = str_pad($month, 2, "0", STR_PAD_LEFT);
	
	while($currentDay<=$numberDays){
		
	if($dayOfWeek==7){
		
	$dayOfWeek = 0;
	$calendar.="</tr><tr>";
	}

	$curentDayRel= str_pad($currentDay, 2, "0", STR_PAD_LEFT);
	$date = "$year-$month-$curentDayRel";
	$dayName= strtolower(date('i',strtotime($date)));//maybe error
	$today= $date==date('Y-m-d')?'today':'';
	
	if($date<date('Y-m-d')){
		
	$calendar.="<td><h4>$currentDay</h4><button class='btn btn-danger btn-xs'>N/A</button>";
	}elseif(in_array($date, $bookings)){
		
	$calendar.="<td class='$today'><h4>$currentDay</h4><button class='btn btn-danger btn-xs'>Already Booked</button>";
	}
	else{
		
	$calendar.="<td class='$today'><h4>$curentDayRel</h4><a href='booking.php?date=".$date."' class='btn btn-success btn-xs'>Book</a></td>";
	}
	
	$currentDay++;
	$dayOfWeek++;

	}

	if($dayOfWeek<7){
		
	$remainingDays =7-$dayOfWeek;
	
	for($i=0;$i<$remainingDays;$i++){
		
	$calendar.="<td class='empty'></td>";
	}
	}

	$calendar.="</tr></table>";



	return $calendar;

}

?>

<html>
    <head>
	<meta name="viewpoint" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<style>
	@media only screen and(max-width: 760px),
	(min-device-width:802px) and (max-device-width:1020px){

	table,
	thead,
	tbody,
	th,
	td,
	tr{
	display: block;

	}

	.empty{
	display: none;
	}

	th{
	position: absolute;
	top: -9999px;
	left: -9999px;
	}

	tr{
	border: 1px solid #ccc;
	}

	td{
	border: none;
	border-bottom: 1px solid #eee;
	position: relative;
	padding-left: 50%;
	}

			
	td:nth-of-type(1):before{
	content: "Sunday";
	}

	td:nth-of-type(2):before{
	content: "Monday";
	}

	td:nth-of-type(3):before{
	content: "Tuesday";
	}

	td:nth-of-type(4):before{
	content: "Wednesday";
	}

	td:nth-of-type(5):before{
	content: "Thursday";
	}

	td:nth-of-type(6):before{
	content: "Friday";
	}

	td:nth-of-type(7):before{
	content: "Saturday";
	}
	}

		
	@media only screen and (min-device-width:320px) and (max-device-width: 480px){
	body{
	padding: 0;
	margin: 0;
	}
	}

		
	@media only screen and (min-device-width: 802px) and (max-device-width:1020px){
	body{
	width: 495px;
	}
	}

	@media (min-width: 641px){
	table{
	table-layout: fixed;
	}

	td{
	width: 33%;
	}
	}

	.row{
	margin-top: 20px;
	}

	.today{
	background: yellow;
	}
	</style> 
	</head>
	<body> 
	<div class="container"> 
	<div class="row"> 
	<div class="col-md-12"> 
	<div id="calendar"> 
	<?php 
	$dateComponents = getdate(); 
	if(isset($_GET['month']) && isset($_GET['year'])){
	$month= $_GET['month'];
	$year= $_GET['year'];
	}else{
	$month= $dateComponents['mon'];
	$year= $dateComponents['year'];
	}

	echo build_calendar($month, $year);
     ?> 
	</div> 
	</div> 
	</div> 
	</div> 

</section>

</body>
</html>
