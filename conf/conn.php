<?php
	$host="localhost";
	$user="root";
	$password="";
	$db="klinik_bk";
	$conn=mysqli_connect($host,$user,$password,$db);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
    //echo "koneksi ke database sukses..";	
?>