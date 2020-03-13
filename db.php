<?php 

$servername ="sql201.epizy.com";
$dbUser = "epiz_24419661";
$dbPass = "4dRuHcDBm0m";
$dbName = "epiz_24419661_intra";

$con = mysqli_connect("$servername","$dbUser","$dbPass","$dbName");

if(!$con){
	die("connection failed : ".mysqli_connect_error());
}

?>