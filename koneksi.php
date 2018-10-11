<?php
$servername = "localhost";
$username ="root";
$password = "";
$db = "pendaftaran";
$con = new mysqli($servername,$username,$password,$db);

if($con==false){
	die("Connection Failed: ". $con->connect_eror);
}
?>