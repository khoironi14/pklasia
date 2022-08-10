<?php 
include 'koneksi.php';
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$hak_akses=$_POST['hak_akses'];
$query=$mysqli->query("INSERT INTO `tb_user`( `nama`, `username`, `password`, `role`) VALUES ('$nama','$username','$password','$hak_akses')");
if ($query) {
	header('location:login.php');
}