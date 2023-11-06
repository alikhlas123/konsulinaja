<?php
    include "koneksi.php";
    $jumlah=$_POST['jumlah'];
    $nama_daerah=$_POST['nama'];
    $no=0;
    for($i=0; $i<$jumlah; $i++){
      $simpan=mysqli_query($koneksi,"INSERT INTO daerah SET id_daerah='$no', nama_daerah='$nama_daerah[$i]'");
    }
    if($simpan){
      echo"<script> alert('Data berhasil disimpan')</script>";
      header("refresh:0;data_daerah.php");
    }else{
      echo"<script> alert('Data tidak berhasil disimpan')</script>";
      header("refresh:0;daerah.php");
    }
?>