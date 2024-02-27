<?php
    include "koneksi.php";
    $fotoid=$_POST['fotoid'];
    $userid=$_POST['userid'];
    $isikomentar=$_POST['isikomentar'];
    $query=mysqli_query($koneksi,"insert into komentarfoto(fotoid,userid,isikomentar,tanggalkomentar)values('$fotoid','$userid','$isikomentar',NOW())");
    if($query){
        header("location:detailfoto.php?fotoid=".$fotoid);
    }else{
        header("location:detailfoto.php?fotoid=".$fotoid."&pesan=gagal");
    }

?>