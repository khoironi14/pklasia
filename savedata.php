<?php 
include 'koneksi.php';
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$telpon=$_POST['telpon'];
$fakultas=$_POST['fakultas'];
$query=$mysqli->query("INSERT INTO `tb_mahasiswa`(`nim`, `nama`, `notelp`,`id_fakultas`) VALUES ('$nim','$nama','$telpon','$fakultas')");
if ($query) {
	header('location:dashboard.php?menu=view_data');
}