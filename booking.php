<?php


if(isset($_GET['date'])){
    $date = $_GET['date'];
}

if(isset($_POST['submit'])){
	
    $student_id =$_POST['student_id'];
    $email = $_POST['email'];
	$timeslots =$_POST['timeslot'];
	$first_name =$_POST['first_name'];
	$last_name =$_POST['last_name'];
    $mysqli = new mysqli('localhost','root','','bothoclinic');
    $stmt = $mysqli->prepare("INSERT INTO bookings (student_id, timeslot, email, date, first_name, last_name) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param('ssssss',$student_id, $timeslots, $email, $date, $first_name, $last_name);
    $stmt->execute();
    $msg = "<div class='alert alert-success'>Booking successfull</div>";
    $stmt->close();
    $mysqli->close();

}

	$duration = 60;
	$cleanup = 0;
	$start = "07:00";
	$end = "17:00";
function timeslots($duration, $cleanup, $start, $end){
	
    $start = new DateTime($start);
    $end = new DateTime($end);
    $interval = new Dateinterval("PT".$duration."M");
    $cleanupinterval = new Dateinterval("PT".$cleanup."M");
    $slots = array();

    for($intStart = $start; $intStart<$end; $intStart->add($interval)->add($cleanupinterval)){
		
    $endPeriod = clone $intStart;
    $endPeriod->add($interval);
	
    if($endPeriod>$end){
    break;
    }

    $slots[] = $intStart->format("H:iA")."-".$endPeriod->format("H:iA");

    }

    return $slots;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">

    <title></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymus">
    <link rel="stylesheet" href="bosa.css">
</head>


<body style="background-color:pink;">

    <div class="container">
    <center><h1 class="text-center">Book for date:<?php echo date('d/m/Y',strtotime($date));?></h1><hr></center>
    <div class="row">
	<div class="col-md-12">
	<?php echo isset($msg)?$msg:"";?>
    <?php $timeslots= timeslots($duration, $cleanup, $start, $end);
    foreach ($timeslots as $ts ) {
    ?>
    <div class= "col-md-2">
    <div class="form-group">
    <button class="btn btn-success book" data-timeslot="<?php echo $ts;?>"><?php echo $ts;?></button>
    </div> 
    </div>
    <?php }?>
    </div>
    </div>
				
	<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
	
	<div class="modal-content">
	<div class="modal-header">
	  
    <h4 class="modal-title">Booking :<span id="slot"></span></h4>
    </div>
    <div class="modal-body">
    <div class="row">
    <div class="col-md-12">
	<form method="post" action="">
	<div class="form-group">
	<label>Timeslot</label>
    <input required type="text" readonly name="timeslot" id="timeslot" class="form-control">
    </div>
    <div class="form-group">
    <label>Student ID</label>
    <input required type="text" name="student_id" class="form-control">
    </div>
	<div class="form-group">
    <label>First name</label>
    <input required type="text" name="first_name" class="form-control">
    </div>
	<div class="form-group">
    <label>Last name</label>
    <input required type="text" name="last_name" class="form-control">
    </div>
    <div class="form-group">
    <label>Email</label>
    <input required type="email" name="email" class="form-control">
    </div>
	<div class="form-group pull-right">
	<button class="btn btn-primary" type="submit" name="submit">Submit</button>
	</div>
	</form>
	</div>
    </div>
    </div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
	</div>
	</div>
	</div>
		
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="SHA384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7I2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymus"></script>

		
	<script>
	$(".book").click(function(){
	var timeslot = $(this).attr('data-timeslot');
    $("#slot").html(timeslot);
    $("#timeslot").val(timeslot);
    $("#myModal").modal("show");
    })
    </script>			 
	   

       
    <div class="clearfix"></div>
  
    <section class="footer">
    <div class="container text-center">
    
    </div>
    </section>
	
	<br>
	<br>
	<br>
	
	<a href="appointment.php"><input type="button" value="HOME"></a>
   
</body>
</html>