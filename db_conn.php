<?php  

$hostname = "mysql.cs.nott.ac.uk";
$user_name = "alysl40_cw2_2";
$Pass_word = "asong22880544";
$db_name = "alysl40_cw2_2";


$conn = mysqli_connect($hostname, $user_name, $Pass_word, $db_name);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}