<?php
 $hostname='localhost';
 $username='root';
 $password='';
 $db ='db_galeri';

 $koneksi=mysqli_connect($hostname,$username,$password,$db);
  if(!$koneksi){
    echo 'Database Tidak Terkoneksi';
  }

?>
