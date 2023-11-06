<?php
    include "koneksi.php";
    $jumlah=$_POST['jumlah'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $no=0;
    for($i=0; $i<$jumlah; $i++){
      $simpan=mysqli_query($koneksi,"INSERT INTO apotek SET id_apotek='$no' ,nama_apotek='$nama[$i]', alamat='$alamat[$i]'");
    }
    if($simpan){
      echo"<script> alert('Data berhasil disimpan')</script>";
      header("refresh:0;data_apotek.php");
    }else{
      echo"<script> alert('Data tidak berhasil disimpan')</script>";
      header("refresh:0;apotek.php");
    }
?>