<?php
include "koneksi.php";

$userid = $_POST['userid'];
$namaalbum = $_POST['namaalbum'];
$deskripsi = $_POST['deskripsi'];
$tanggaldibuat = $_POST['tanggaldibuat'];

$query = mysqli_query($koneksi, "INSERT INTO album (namaalbum, deskripsi, tanggaldibuat, userid) 
    VALUES ('$namaalbum', '$deskripsi', '$tanggaldibuat', '$userid')");

if ($query) {
    header("location:album.php?pesan=tambahsukses");
} else {
    header("location:tambahalbum.php?pesan=tambahgagal");
}
?>
