<?php 
// echo "hello";
// $conn = mysqli_connect("","","","") or die("Connection failed");
// $db_host = "localhost";
// 	$db_user = "u421568006_finder";
// 	$db_pass = "BharatJobFinder2005";
// 	$db_name = "u421568006_bharatJobFinde";
// $conn =  mysqli_connect($db_host,$db_user,$db_pass,$db_name);

// if(!$conn){
//     die('connection fail' . mysqli_connect_error());
// }


$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "bharatjobfinder";
$conn =  mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(!$conn){
    die('connection fail' . mysqli_connect_error());
}

?>