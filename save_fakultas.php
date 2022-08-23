<?php include 'koneksi.php';
$fakultas=$_POST['fakultas'];
$id=$_POST['id'];
if($id==""){
$insert=$mysqli->query("INSERT INTO `tb_fakultas`(`nama_fakultas`) VALUES ('$fakultas')");
echo json_encode("Data Berhasil disimpan");	
}else{

	$update=$mysqli->query("UPDATE `tb_fakultas` SET `nama_fakultas`='$fakultas' WHERE `id_fakultas`='$id'");
	echo json_encode("Data Berhasil diedit");
}

