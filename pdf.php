<?php
ob_start();
include 'koneksi.php';

 $query=$mysqli->query("Select * from tb_mahasiswa  join tb_fakultas on tb_mahasiswa.id_fakultas=tb_fakultas.id_fakultas");?>
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
  <style type="text/css">
    td{
      padding: 3px 3px;
    }
  </style>
</head>
<body>
 <table style="border-collapse:collapse;border-spacing:0;"  border="1">
          <thead>
            <tr>
              <th>NIM</th>
              <th>Nama</th>
              <th>Fakultas</th>
              <th>Telpon</th>
             
            </tr>
          </thead>
          <tbody>
            <?php foreach ($query as $row) {
             
             ?>
            <tr>
              <td><?php echo $row['nim']?></td>
              <td><?php echo $row['nama']?></td>
              <td><?php echo $row['nama_fakultas']?></td>
              <td><?php echo $row['notelp']?></td>
              
            </tr>
          <?php }?>
            
          </tbody>
        </table>
</body>
</html>
<?php 

	//Meload library mPDF
require_once __DIR__ . '/vendor/autoload.php';

	//Membuat inisialisasi objek mPDF
	$mpdf = new mPDF();

	//Memasukkan output yang diambil dari output buffering ke variabel html
	$html = ob_get_contents();

	//Menghapus isi output buffering
	ob_end_clean();

	$mpdf->WriteHTML(utf8_encode($html));

	//Membuat output file
	$content = $mpdf->Output("CETAK.pdf", "I");

?>