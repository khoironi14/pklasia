<?php include 'koneksi.php';
$fakultas=$_POST['fakultas'];
$insert=$mysqli->query("INSERT INTO `tb_fakultas`(`nama_fakultas`) VALUES ('$fakultas')");
if ($insert) {
	echo json_encode("Data Berhasil disimpan");
}