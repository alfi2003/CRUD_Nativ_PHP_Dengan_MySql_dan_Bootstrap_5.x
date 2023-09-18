<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// menginput data ke database
$db->query("UPDATE tamu2 SET name='$name', email='$email', message='$message' WHERE id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php?pesan=update");
?>