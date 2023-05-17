<?php 
// koneksi database
include 'conect.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($conect,"DELETE FROM tbl_mhs2 WHERE id_mahasiswa ='$id'");
 
// mengalihkan halaman kembali ke data mahasiswa
header("location:UTS.php");
 