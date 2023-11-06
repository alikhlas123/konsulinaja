<?php
    include "koneksi.php";
    $jumlah=$_POST['jumlah'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $daerah=$_POST['daerah'];
    $no=0;
    for($i=0; $i<$jumlah; $i++){
      $simpan=mysqli_query($koneksi,"INSERT INTO rs SET id_rs='$no' ,nama_rs='$nama[$i]', alamat='$alamat[$i]', id_daerah='$daerah[$i]'");
    }
    if($simpan){
      echo"<script> alert('Data berhasil disimpan')</script>";
      header("refresh:0;data_rs.php");
    }else{
      echo"<script> alert('Data tidak berhasil disimpan')</script>";
      header("refresh:0;rs.php");
    }
?>