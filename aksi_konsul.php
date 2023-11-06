<?php
    session_start();
    include "koneksi.php";
    $nama=$_POST['nama_pasien'];
    $nama=$_SESSION['username'];
    $username=$nama;
    $keluhan=$_POST['keluhan'];
    $no=0;
    $simpan=mysqli_query($koneksi,"INSERT INTO konsul_penyakit VALUES('$no','$username','$keluhan')");
    if($simpan){
      echo"<script> alert('Berhasil dikirim')</script>";
      header("refresh:0;konsul.php");
    }else{
      echo"<script> alert('Gagal Dikirim')</script>";
      header("refresh:0;konsul.php");
    }
?>