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
			
					<div class="form-group">
					<label>Nim</label>
					<input type="text" name="nim" id="nim"  class="form-control nim" >
				</div>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" id="nama" class="form-control" >
					<div id="keterangan"></div>
				</div>
				<div class="form-group">
					<?php include 'koneksi.php'; $query=$mysqli->query("Select * from tb_fakultas"); ?>
					<label>Fakultas</label>
					<select name="fakultas" id="fakultas" class="form-control">
						<?php foreach($query as $row){ ?>
						<option value="<?=$row['id_fakultas']?>"><?php echo $row['nama_fakultas']?></option>
					<?php }?>
					</select>
				</div>
				<div class="form-group">
					<label>Telp</label>
					<input type="text" name="telpon" class="form-control" >
				</div>
				<div class="form-group">
					<button class="btn btn-success" id="btn">Simpan</button>
				</div>
			
		</div>
	</div>

</body>
</html>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		let html='';
		$('#btn').click(function(){
			let nim=$('#nim').val();
			let nama=$('#nama').val();
		if(nim=="" ){
			alert("Nim  Wajib diisi");
		}
		if(nama==""){
			
			html='wajib diisi';
			$('#keterangan').html(html);
		}

		});
		$('#fakultas').change(function(){

			let fakultas=$('#fakultas').val();
			alert(fakultas);
		});
		$('#nim').keyup(function(){
			let nim1=$('#nim').val();
			alert(nim1);
		})
		
	})
</script>