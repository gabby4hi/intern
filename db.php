<?php 
	
	
$location = "localhost";
$user = "root";
$pwd = "";
$db = "test";

$con = mysqli_connect($location, $user, $pwd, $db);
if (!$con) {
	
	echo "Failed to connect".mysqli_connect_error();

}else{
	echo "Yes...";
}


 ?>