  <html>
  <body>
  
  
<a href="remove ac.php"><input type="button" name="remove" value="back"> </a>
<br><br>
  <?php
include_once 'del con.php';

if(count($_POST)>0)
{
    mysqli_query($conn,"UPDATE nurseclinic set first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', nurse_id='" . 
	$_POST['nurse_id'] . "', email='" . $_POST['email']. "', password='" . $_POST['password']. "' WHERE nurse_id='" . $_POST['nurse_id'] . "'");
    echo"Record Successfully Modified ";
	
}
 
  
  ?>
  
</body>
</html>