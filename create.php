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
			<form action="savedata.php" method="post">
					<div class="form-group">
					<label>Nim</label>
					<input type="text" name="nim"  class="form-control" required>
				</div>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" class="form-control" required>
				</div>
				<div class="form-group">
					<?php include 'koneksi.php'; $query=$mysqli->query("Select * from tb_fakultas"); ?>
					<label>Fakultas</label>
					<select name="fakultas" class="form-control">
						<?php foreach($query as $row){ ?>
						<option value="<?=$row['id_fakultas']?>"><?php echo $row['nama_fakultas']?></option>
					<?php }?>
					</select>
				</div>
				<div class="form-group">
					<label>Telp</label>
					<input type="text" name="telpon" class="form-control" required>
				</div>
				<div class="form-group">
					<button class="btn btn-success">Simpan</button>
				</div>
			</form>
		</div>
	</div>

</body>
</html>