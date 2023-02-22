<?php

// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "root";
// $dbname = "interwoven_research_journal";

// if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
// {
	
// 	die("Failed to Connect!");
// }

// else{
// 	echo 'Connection established';
// }	

$conn = mysqli_connect("localhost","root","root","interwoven_research_journal");
if(!$conn)
	die("could not connect".mysqli_connect_error());

?>

