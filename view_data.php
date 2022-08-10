<!doctype html>
<html lang="en">
<?php
session_start();
$role= $_SESSION['role'];

 include 'koneksi.php'; $query=$mysqli->query("Select * from tb_mahasiswa  join tb_fakultas on tb_mahasiswa.id_fakultas=tb_fakultas.id_fakultas");?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <script type="text/javascript" src="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="bg">
    <?php include 'menu.php';?>
    <div class="container">
      <div class="col-md-12 mt-2">
        <?php if($role !=2){
            

        

         ?>
        <a href="create.php" class="btn btn-primary">Tambah Data</a>

      <?php }?>
        <table class="table " >
          <thead>
            <tr>
              <th>NIM</th>
              <th>Nama</th>
              <th>Fakultas</th>
              <th>Telpon</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($query as $row) {
              // code...
             ?>
            <tr>
              <td><?php echo $row['nim']?></td>
              <td><?php echo $row['nama']?></td>
              <td><?php echo $row['nama_fakultas']?></td>
              <td><?php echo $row['notelp']?></td>
              <td><a href="edit_data.php?nim=<?php echo $row['nim']?>" class="btn btn-info">Edit</a> <a href="hapus_data.php?nim=<?=$row['nim']?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Yakin Anda akan menghapusnya?')">Hapus</a></td>
            </tr>
          <?php }?>
            
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
    $('.table').DataTable();
});
</script>