<?php 
class Aksi{
  protected $mysqli;
  function __construct(){
    require_once "database.php";
    $conn = new database();    
    $this->mysqli = $conn->connect();        
  }
  function tampilkan(){ 
    $hasil=[];       
    $data = $this->mysqli->query("SELECT * FROM thr_karyawan");
    while($amb = mysqli_fetch_array($data)){
      $hasil[] = $amb;
    }    
    return $hasil;
  }
  function simpan($nik,$nama,$gapok,$tunjangan,$bonus,$iuran,$thr){    
    $result = $this->mysqli->query("INSERT INTO thr_karyawan values('$nik','$nama','$gapok','$tunjangan','$bonus','$iuran','$thr')");		    
    if($result) return 1;
      else return 0;    
  }
  function update($nik,$nama){    
    $result = $this->mysqli->query("UPDATE thr_karyawan SET nama = '$nama' WHERE nik = '$nik'");		    
    if($result) return 1;
      else return 0;    
  }
  function detail($nik){    
    $result = $this->mysqli->query("SELECT * FROM thr_karyawan WHERE nik = '$nik'");		
    $data   = $result->fetch_assoc();        
    return $data;
  }
  function hapus($nik){    
    $this->mysqli->query("DELETE FROM thr_karyawan WHERE nik = '$nik'");		    
	}
}
?>