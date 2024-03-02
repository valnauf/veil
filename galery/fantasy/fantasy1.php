<?php include 'koneksi.php'; ?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Halaman Berita</h2>
        <p></p>
      </div>
    </div><!-- End Breadcrumbs -->

	<div class="container">	
		<table class="table table-bordered">
    <thead>
				<tr>
					<th width="10">No</th>
					<th width="50">Judul</th>
					<th width="100">Deskripsi</th>
					<th width="50">Tanggal</th>
					<th width="200">Lokasi Foto</th>
          <th width="50">Album ID</th>
          <th width="50">User ID</th>
          <th width="20">Likes</th>
		  <th width="100">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$batas = 4;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
				
				$data = mysqli_query($koneksi,"select * from foto");
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);
 
				$data = mysqli_query($koneksi,"select * from foto limit $halaman_awal, $batas");
				$nomor = $halaman_awal+1;
				while($d = mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $nomor++; ?></td>
            <td><?php echo $d['judul_foto']; ?></td>
			<td><?php echo $d['diskripsi_foto']; ?></td>
            <td><?php echo $d['tanggal_unggah']; ?></td>
            <td>
            <a href="tampil_foto.php?foto_id=<?php echo $d['foto_id']; ?>">
            <?php echo "<img src='../img/$d[lokasi_file]' width='100%'/>" ?>
            </td>
            </a>
            <td><?php echo $d['album_id']; ?></td>
            <td><?php echo $d['user_id']; ?></td>
			<td><?php echo $d['likes']; ?></td>
			<td>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  font-size: 30px;
  cursor: pointer;
  user-select: none;
}

.fa:hover {
  color: darkblue;
}
</style>
</head>
<body>


<i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>

<script>
function myFunction(x) {
  x.classList.toggle("fa-thumbs-down");
}
</script>
<a href="hapus.php?foto_id=<?php echo $d['foto_id']; ?>" class="btn btn-primary">HAPUS</a>
</body>
</html>			

					<?php
				}
				?>
			</tbody>
		</table>
		<nav>
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$Previous'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<li class="page-item">
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
				</li>
			</ul>
		</nav>
	</div>

<!-- ======= Footer ======= -->
<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
    </div>
<script src="assets/js/main.js"></script>

</body>
</html>