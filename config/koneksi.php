<?php

$host = 'localhost';
$userhost = 'root';
$passhost = '';
$database = 'tahu';

$koneksi = mysqli_connect($host, $userhost, $passhost, $database) or die();

if(!$koneksi){
	echo "Koneksi ke database gagal : ". mysqli_errno();
}

?>