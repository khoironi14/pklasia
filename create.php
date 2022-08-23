

	
		<div class="col-md-6">
			<form action="savedata.php" method="post"> 	
			<div class="	card">
					<div class="	card-body">

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
				</form>
			
		</div>
	</div>


						</div>
				</div>
<script type="text/javascript" src="jquery.js"></script>
