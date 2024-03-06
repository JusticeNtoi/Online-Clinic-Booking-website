<?php

$servername='localhost';
$username='root';
$password='';
$dbname='bothoclinic';
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn)
{
	die('Could not connect My SQL:' .mysql_error());
}

?>