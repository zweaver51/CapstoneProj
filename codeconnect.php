<?php
	$host='localhost';
	$user='root';
	$pass='';
	$db='FormEntry';
	
	$dbcon = mysqli_connect($host,$user,$pass,$db);
	
	$querydrop = "SELECT * FROM Course";
	$resultdrop = mysqli_query($dbcon, $querydrop);
	
?>