<?php 
include 'aksi.php';
$db = new aksi();

include'gaji.php';
$cariAngka = new bonusthr();

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$gapok = 3000000;
$tunjangan = $cariAngka->tunjangan($nik);
$bonus = $cariAngka->bonus($nik);
$iuran = $cariAngka->iuran($gapok,$tunjangan,$bonus);
$thr = $cariAngka->thr($nik,$gapok,$tunjangan,$bonus,$iuran);

$result = $db->simpan($nik,$nama,$gapok,$tunjangan,$bonus,$iuran,$thr);

if($result==1){
	echo "
	<script>
		alert('Data berhasil disimpan');		
		window.location.href='input.php';
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