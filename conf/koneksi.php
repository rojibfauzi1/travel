<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'jitc4';

$conn = new Mysqli($host,$user,$pass,$db);

if($conn->connect_error){
	echo "Gagal Koneksi";
}

?>