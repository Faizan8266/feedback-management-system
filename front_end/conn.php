<?php

$host="localhost";
$user="root";
$password="";
$database="faizan";

$con=new mysqli("$host","$user","$password","$database");

if(!$con){
	echo "Error";
}

?>