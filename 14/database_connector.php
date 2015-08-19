<?php
	$host="198.71.225.57";
	$user="lauren";
	$password="justin@02";
	$dbName="hurricane";
	
	$con=mysqli_connect($host,$user,$password,$dbName);
	
	if(!$con){
		echo "Could not connect to database";
		}
?>
