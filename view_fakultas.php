<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" src="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a href="#" onclick="tambah()">Tambah Data</a>
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Fakultas</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="isi">
					
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>
<!--Modal-->
<div class="modal fade" id="modal-add" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="container">
       	<div class="form-group">
       		<label>Fakultas</label>
       		<input type="text" name="fakultas" id="fakultas" class="form-control">
       	</div>
       </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" onclick="simpan()">Simpan</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hide this modal and show the first with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript">
	tampildata();
	function tampildata(){
		$.ajax({
			url:"getdata.php",
			type:"get",
			dataType:"json",
			success:function(data){
				let html='';
				let no=1;
				$.each(data,function(i){
					html +=`<tr>
					<td>${no++}</td>
					<td>${data[i].nama_fakultas}</td>
					<td><a href='#' onclick="edit(${data[i].id_fakultas})" >edit</a></td>
					</tr>`;

				});
				$('#isi').html(html);
				
			}

		});
	}
	function tambah(){

		$('#modal-add').modal('show');
	}
	function simpan(){
		let fakultas=$('#fakultas').val();
		$.ajax({

			url:"save_fakultas.php",

			type:"post",
			data:{fakultas:fakultas},
			success:function(data){
				alert(data);
				$('#modal-add').modal('hide');
				tampildata();
			}
		})
	}
	function edit(id){
		$.ajax({
			url:"edit_fakultas.php?id="+id,
			type:"get",
			dataType:"json",
			success:function(data){
				
				$('#fakultas').val(data.nama_fakultas);

				$('#modal-add').modal('show');
			}
		})
		
	}
</script>