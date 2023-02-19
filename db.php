<?php

$host = "localhost";
$user ="root";
$pass = "";
$db_name= "android";


$db = new mysqli($host, $user,$pass,$db_name);

function formatDate($date){
	return date('F j, Y, g:i a', strtotime($date));
	//return date('F j, Y', strtotime($date));
}




?>
