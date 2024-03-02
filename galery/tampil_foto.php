<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Course Details - Mentor Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Tampilan Berita</h2>
        <p></p>
      </div>
    </div><!-- End Breadcrumbs -->


       <!-- ======= About Section ======= -->
       <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <?php
        include 'koneksi.php';
        $id = $_GET['foto_id'];
        $data = mysqli_query($koneksi,"SELECT * FROM foto where foto_id='$id'");
        while($d = mysqli_fetch_array($data)){
        ?>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <?php echo "<img src='img/$d[lokasi_file]' width='100%'/>" ?>
          </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <p class="fst-italic">
          

      
      <tr>
        <center><h3><td><?php echo $d['judul_foto']; ?></td><br><br></h3>
        <td> Tanggal : <?php echo $d['tanggal_unggah']; ?></td><br>
        <td> User ID : <?php echo $d['user_id']; ?></td><br><hr>
        <td> Deskripsi : <?php $kalimat=$d['diskripsi_foto'];
                               $jumlahkarakter=200;
                               $cetak = substr($kalimat, 0, $jumlahkarakter);
                               echo $cetak; ?>
                               </tr>

            <?php
        }
            ?>

    </section><!-- End About Section -->

  <script src="assets/js/main.js"></script>

</body>

</html>