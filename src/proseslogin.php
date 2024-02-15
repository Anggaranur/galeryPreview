<?php
session_start();
	include "koneksi.php";

	$username=$_POST['username'];
	$password=$_POST['password'];

	$query=mysqli_query($koneksi,"select * from user where username='$username'and password='$password'");
	$data=mysqli_fetch_array($query);
	$cek=mysqli_num_rows($query);
	if($cek>0){
		$_SESSION['userid']=$data['userid'];
		header("location:indexlogin.php?pesan=berhasil login");
	}else{
		header("location:login.php?pesan=gagal");
	}
  
  
?>