<?php 
include 'koneksi.php';
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$cek=$mysqli->query("Select * from tb_user where username='$username' and password='$password'");
if ($cek->num_rows >0) {
	$data=mysqli_fetch_array($cek);
	$_SESSION['role']=$data['role'];
	 $_SESSION['username']=$data['nama'];
	
	header('location:view_data.php');
}else{

	$_SESSION['keterangan']='<div class="alert alert-danger" role="alert">
  Login gagal
</div>';
	header('location:login.php');
}