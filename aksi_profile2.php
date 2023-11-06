<?php
    include "koneksi.php";
    $username=$_POST['username'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jk=$_POST['jk'];
    $no=0;
    $simpan=mysqli_query($koneksi,"INSERT INTO user VALUES('$no','$username','$nama','$alamat','$jk')");
    if($simpan){
      echo"<script> alert('Data berhasil disimpan')</script>";
      header("refresh:0;profile.php");
    }else{
      echo"<script> alert('Data tidak berhasil disimpan')</script>";
      header("refresh:0;profile.php");
    }
?>