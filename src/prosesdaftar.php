<?php
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$namalengkap=$_POST['namalengkap'];
$alamat=$_POST['alamat'];

$query=mysqli_query($koneksi,"insert into user(username,password,email,namalengkap,alamat) values('$username','$password','$email','$namalengkap','$alamat')");

if($query){
	header("location:login.php?pesan=sukses");
}else{
	header("location:daftar.php?pesan=gagal");
}

?>