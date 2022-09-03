<?php

$serverName = "localhost";
$dBuserName = "root";
$dBpassword = "";
$dBName = "users_login";

$conn =  mysqli_connect($serverName, $dBuserName, $dBpassword, $dBName);

if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
}