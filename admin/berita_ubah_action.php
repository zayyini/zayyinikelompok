<?php
session_start();
include "config.php";

$berita_id = $_POST["berita_id"];
$judul = $_POST["judul"];
$isiberita = $_POST["isi"];
$tgl_upload = $_POST["tanggal"];
$tgl_upload = date('Y-m-d', strtotime($tgl_upload)); // Ubah format tanggal

$usernama = $_POST["user_nama"];

$lokasifile = $_FILES['gambar']['tmp_name'];
$namafile = $_FILES['gambar']['name'];

$uploaddir = "uploads/";
$uploadfile = $uploaddir . $namafile;

if (!empty($lokasifile)) {
    $sql = "UPDATE berita SET berita_judul='$judul', berita_isi='$isiberita', berita_tanggal='$tgl_upload', berita_gambar='$uploadfile', user_nama='$usernama' WHERE berita_id='$berita_id'";
    $hasil = mysqli_query($config, $sql);
    if ($hasil) {
        move_uploaded_file($lokasifile, $uploadfile);
        echo "<script>alert('Data berhasil diubah')</script>";
        echo "Nama File : <b>$namafile</b> sukses di upload<br/><br/>";
        echo "<a href='halamanberita.php'>kembali</a>";
    } else {
        echo "Data gagal disimpan";
    }
} else {
    $sql = "UPDATE berita SET berita_judul='$judul', berita_isi='$isiberita', berita_tanggal='$tgl_upload', user_nama='$usernama' WHERE berita_id='$berita_id'";
    $hasil = mysqli_query($config, $sql);
    header('location: halamanberita.php');
}
?>