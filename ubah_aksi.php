<?php 
include 'aksi.php';
$db = new aksi();

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$result = $db->update($nik,$nama);
if($result==1){
	echo "
	<script>
		alert('Data berhasil diubah');		
		window.location.href='index.php';
	</script>
	";
}else{
	echo "
	<script>
		alert('Gagal simpan');		
		history.go(-1);
	</script>
	";
}
?>