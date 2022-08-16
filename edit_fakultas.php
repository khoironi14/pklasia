<?php 
include 'koneksi.php';
$id=$_GET['id'];
$query=$mysqli->query("Select * from tb_fakultas where id_fakultas='$id'");
$data=mysqli_fetch_array($query);
echo json_encode($data);