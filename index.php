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
    <div class="row justify-content-center">
      <?php session_start(); if(isset($_SESSION['keterangan'])){

        echo $_SESSION['keterangan'];
        unset($_SESSION['keterangan']);
      } ?>
      <div class="col-md-6 ">
        <form action="validasi.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="form-control">
          </div>
          <div class="form-group">
            <button class="btn btn-success">Login</button>
          </div>

        </form>
      </div>
    </div>
  </div>

</body>
</html>