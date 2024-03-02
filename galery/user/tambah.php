<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
		<tr>			
				<td>Judul</td>
				<td><input type="text" class="form-control" id="judul_foto" placeholder="Enter judul_foto" name="judul_foto"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" class="form-control" id="diskripsi_foto" placeholder="Enter diskripsi_foto" name="diskripsi_foto"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="date" class="form-control" id="tanggal_unggah" placeholder="Enter tanggal_unggah" name="tanggal_unggah"></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td><form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="">
            </div>
        </form></td>
			</tr>
			<tr>
				<td>Album ID</td>
				<td><input type="number" class="form-control" id="album_id" placeholder="Enter album_id" name="album_id"></td>
			</tr>
			<tr>
				<td>User ID</td>
				<td><input type="number" class="form-control" id="user_id" placeholder="Enter user_id" name="user_id"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>
