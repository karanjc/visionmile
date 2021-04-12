<?php

$server="sql107.epizy.com";
$username="epiz_28358900";
$password="16EKFqvdmrAa";
$dbname="epiz_28358900_visionmile";

$conn=mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
	die("Connection Failed:".mysqli_connect_error());
}

?>