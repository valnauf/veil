<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$password = md5($_POST['password']);
 
// menginput data ke database
$sql="insert into user (username,nama_lengkap,email,alamat,password) values('$username','$nama_lengkap','$email','$alamat','$password')" ;
 
//Mengeksekusi/menjamin query diatas
$hasil=mysqli_query($koneksi,$sql);

//kondisi apakah berhasil atau tidak
if ($hasil) {
    echo "Berhasil simpan data anggota";
    exit;
}
else{
    echo "Gagal simpan data anggota";
    exit;
}

?>