<?php

$username = "id15714734_mohammadamirparvez";
$password = "KalaKala@786";
$server = 'localhost';
$db='id15714734_database';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
	echo "Connected";
	
}else
{
	die("No connection" . mysqli_connect_error());

}

?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>

</body>
</html>
