<?php 
include 'koneksi.php';
$nim=$_GET['nim'];
$query=$mysqli->query("delete from tb_mahasiswa where nim='$nim'");
header('location:view_data.php');