<?php 
include 'koneksi.php';
$query=$mysqli->query("Select * from tb_fakultas");
$data=array();
foreach ($query as $row) {
	$data[]=$row;
}
echo json_encode($data);