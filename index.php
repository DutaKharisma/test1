<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">	
</head>
<body>
<div class="container">	
	<h1>Data karyawan</h1>
	<a href="input.php" class="btn btn-primary">Tambah Data</a>
	<br> <br>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<td width="5%">No</td>
				<td>NIK</td>
				<td>Nama</td>
				<td>gapok</td>
				<td>tunjangan</td>
				<td>bonus</td>
				<td>iuran</td>
				<td>thr</td>				
				<!-- <td width="15%">Aksi</td> -->
			</tr>
		</thead>
		<tbody>
		<?php 
		include 'aksi.php';
		$db = new aksi();
		$no=1;
		foreach($db->tampilkan() as $row){		
			echo "
			<tr>
				<td>$no</td>
				<td>$row[nik]</td>
				<td>$row[nama]</td>
				<td>$row[gapok]</td>
				<td>$row[tunjangan]</td>
				<td>$row[bonus]</td>
				<td>$row[iuran]</td>
				<td>$row[thr]</td>			
				<td>
					<a href='hapus.php?nik=$row[nik]' class='btn btn-danger btn-sm'>hapus</a>
					<a href='form_ubah.php?nik=$row[nik]' class='btn btn-info btn-sm'>ubah</a>
				</td>
			</tr>
			";
			$no++;
		}
		?>
		</tbody>
	</table>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>