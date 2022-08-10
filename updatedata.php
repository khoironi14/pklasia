<?php 
include 'koneksi.php';
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$telpon=$_POST['telpon'];
$query=$mysqli->query("UPDATE `tb_mahasiswa` SET `nama`='$nama',`notelp`='$telpon' WHERE nim='$nim'");
if ($query) {
	header('location:view_data.php');
}