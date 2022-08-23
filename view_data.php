<!doctype html>
<html lang="en">
<?php
error_reporting(0); 
session_start();
$role= $_SESSION['role'];

 include 'koneksi.php'; $query=$mysqli->query("Select * from tb_mahasiswa  join tb_fakultas on tb_mahasiswa.id_fakultas=tb_fakultas.id_fakultas");?>
 
  
  
      <div class="col-md-12 mt-2">
        <div class="card">
          <div class="card-header">
          <a href="pdf.php" target="blank" class="btn btn-info">Export PDF</a></div>
          <div class="card-body">
            
         
        <?php if($role !=2){
            

        

         ?>
        <a href="?menu=create" class="btn btn-primary">Tambah Data</a>

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
              <td><a href="?menu=edit_data&nim=<?php echo $row['nim']?>" class="btn btn-info">Edit</a> <a href="hapus_data.php?nim=<?=$row['nim']?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Yakin Anda akan menghapusnya?')">Hapus</a></td>
            </tr>
          <?php }?>
            
          </tbody>
        </table>
      </div>
    </div>
     </div>
       
 


<script type="text/javascript">
  $(document).ready(function () {
    $('.table').DataTable();
});
</script>