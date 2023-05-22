<?php 
include "aksi.php";
$db = new aksi();
$nik =$_GET['nik'];
$result = $db->hapus($nik);
echo "
<script>
	alert('Data berhasil dihapus');
	window.location.href='index.php';
</script>
";
?>