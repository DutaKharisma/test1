<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">	
</head>
<body>
<div class="container">	
	<h1>Data karyawan</h1>
	<a href="index.php" class="btn btn-warning">Lihat Data</a>
	<br> <br>
	<?php 
	include 'aksi.php';
	$db = new aksi();
	$nik = $_GET['nik'];	
	$row = $db->detail($nik);
	?>
	<form action="ubah_aksi.php" method="POST" enctype="multipart/form-data">
	  <div class="row mb-3">
	    <label class="col-sm-2 col-form-label">NIK *</label>
	    <div class="col-sm-4">
	      <input type="text" required readonly class="form-control" value="<?php echo $row['nik'] ?>" name="nik" placeholder="NIK">
	    </div>
	  </div>
	  <div class="row mb-3">
	    <label class="col-sm-2 col-form-label">Nama</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" value="<?php echo $row['nama'] ?>" name="nama" placeholder="Nama">
	    </div>
	  </div>
	  <div class="row mb-3">
	  	<div class="col-sm-2"></div>
	  	<div class="col-sm-10">
	  		<button type="submit" class="btn btn-primary">Update</button>
	  		<button type="reset" class="btn btn-warning">Batal</button>
	  	</div>
	  </div>	  
	</form>


</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>