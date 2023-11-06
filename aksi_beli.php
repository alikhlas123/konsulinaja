<?php
    session_start();
    include "koneksi.php";
    foreach ($_SESSION['data_beli'] as $id=>$jumlah){
      $username=$_SESSION['username'];
      $no=0;
      $sql=mysqli_query($koneksi,"INSERT INTO beli VALUES('$no','$id','$username','$jumlah')");
    }
if($sql){
    echo"<script> alert('Proses belanja sukses')</script>";
    header("refresh:0;proses_order.php");
  }else{
    echo"<script> alert('Belanja gagal')</script>";
    header("refresh:0;proses_order.php");
  }
    unset($_SESSION['data_beli']);
?>