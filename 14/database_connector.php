<?php
	$host="";
	$user="";
	$password="";
	$dbName="";
	
	$con=mysqli_connect($host,$user,$password,$dbName);
	
	if(!$con){
		echo "Could not connect to database";
		}
?>
