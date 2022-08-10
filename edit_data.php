<?php 
include 'koneksi.php';
$nim=$_GET['nim'];
$query=$mysqli->query("Select * from tb_mahasiswa where nim='$nim'");
$data=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="col-md-6">
			<form action="updatedata.php" method="post">
					<div class="form-group">
					<label>Nim</label>
					<input type="text" name="nim" value="<?=$data['nim']?>"  class="form-control" required readonly>
				</div>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" value="<?=$data['nama']?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Telp</label>
					<input type="text" name="telpon" value="<?=$data['notelp']?>" class="form-control" required>
				</div>
				<div class="form-group">
					<button class="btn btn-success">Simpan</button>
				</div>
			</form>
		</div>
	</div>

</body>
</html>