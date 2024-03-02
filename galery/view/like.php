<?php
// like.php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Ambil data dari URL
    $foto_id = $_GET["foto_id"];

    // Sambungkan ke database
    $conn = new mysqli("localhost", "root", "", "gallery");

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update jumlah likes di database
    $sql = "UPDATE foto SET likes = likes + 1 WHERE id = $foto_id";

    if ($conn->query($sql) === TRUE) {
        header("Location:tambah_foto.php"); // Redirect kembali ke halaman galeri
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
}
