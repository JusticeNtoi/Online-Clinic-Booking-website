  <html>
  <body>
  
  
<a href="approve ac.php"><input type="button" name="remove" value="back"> </a>
<br><br>
  <?php
include_once 'del con.php';

if(count($_POST)>0)
{
    mysqli_query($conn,"UPDATE clinic set first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', student_id='" . 
	$_POST['student_id'] . "', email='" . $_POST['email']. "', password='" . $_POST['password']. "' WHERE student_id='" . $_POST['student_id'] . "'");
    echo"Record Modified Successfully";
	
}
 
  
  ?>
  
</body>
</html>