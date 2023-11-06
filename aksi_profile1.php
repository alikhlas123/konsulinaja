<?php
    include "koneksi.php";
    $username=$_POST['username'];
    $nama=$_POST['nama'];
    $spesialist=$_POST['spesialist'];
    $praktek=$_POST['praktek'];
    $no_hp=$_POST['no_hp'];
    $no=0;
    $simpan=mysqli_query($koneksi,"INSERT INTO dokter VALUES('$no','$username','$nama','$spesialist','$praktek','$no_hp')");
    if($simpan){
      echo"<script> alert('Data berhasil disimpan')</script>";
      header("refresh:0;profile.php");
    }else{
      echo"<script> alert('Data tidak berhasil disimpan')</script>";
      header("refresh:0;profile.php");
    }
?>