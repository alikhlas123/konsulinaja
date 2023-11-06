<?php
    include "koneksi.php";
    $username=$_POST['username'];
    $nama=$_POST['nama'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $level=$_POST['level'];
    $simpan=mysqli_query($koneksi,"INSERT INTO register VALUES('$username','$nama','$password','$email','$level')");
    if($simpan){
      echo"<script> alert('Data berhasil disimpan')</script>";
      header("refresh:0;login.php");
    }else{
      echo"<script> alert('Data tidak berhasil disimpan')</script>";
      header("refresh:0;register.php");
    }
?>