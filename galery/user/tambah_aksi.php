<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$foto_id = $_POST['foto_id'];
$judul_foto = $_POST['judul_foto'];
$diskripsi_foto = $_POST['diskripsi_foto'];
$tanggal_unggah = $_POST['tanggal_unggah'];
$lokasi_file = $_POST['lokasi_file'];
$album_id = $_POST['album_id'];
$user_id = $_POST['user_id'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into foto values('','$foto_id','$judul_foto','$deskripsi_foto','$tanggal_unggah','$lokasi_file','$album_id ','$user_id')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>