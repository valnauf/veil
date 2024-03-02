<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$foto_id = $_GET['foto_id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from foto where foto_id='$foto_id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>