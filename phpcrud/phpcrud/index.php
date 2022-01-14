<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Peminjaman Barang</title>
  </head>
  <body>
  
	<!-- pesan kesalahan -->
    <?php
	session_start();
	if(isset($_SESSION['error'])){
	?>
	
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<center><?= $_SESSION['error']; ?></center>
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	
	<?php } unset($_SESSION['error']); ?>
	<div class="card col-sm-4 mx-auto mt-5">
	  <div class="card-header">
		Form Login
	  </div>
	  <div class="card-body">
		<form method="POST" action="dashboard.php" autocomplete="off">
		<div class="form-groub">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username" autofocus>
	  </div>
	</div>
	<div class="card-body">
		<form method="POST" action="dashboard.php" autocomplete="off">
	<div class="form-groub">
		<label for="password">Password</label>
		<input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password" autofocus>
	  </div>
	</div>
	<div class="card-body">
		<form method="POST" action="dashboard.php" autocomplete="off">
	  <div class="card-body">
		<form method="POST" action="dashboard.php" autocomplete="off">
	  <button type="submit" class="btn btn-primary btn-block">Masuk</button>
	  </form>
	  </div>
	</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>