<?php 
include 'koneksi.php';
$id=$_GET['id'];
$sql=$mysqli->query("DELETE FROM `tb_fakultas` WHERE id_fakultas='$id'");
echo json_encode("Data BErhasil dihapus");