<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 
// menginput data ke database
$db->query("insert into tamu2 values('','$name','$email','$message')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php?pesan=add");
 
?>