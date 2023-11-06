<?php
  session_start();
  include "koneksi.php";
  $username=$_POST['username'];
  $password=$_POST['password'];
  $op=$_GET['op'];
  if($op=="in"){
    $query_1="SELECT * FROM register WHERE username='$username' AND password='$password'";
    $h_1=$koneksi->query($query_1);
    if(mysqli_num_rows($h_1)==1){
      $d_1=$h_1->fetch_array();
      $_SESSION['username']=$d_1['username'];
      $_SESSION['level']=$d_1['level'];
      $_SESSION['nama']=$d_1['nama'];
      $_SESSION['password']=$d_1['password'];
      $_SESSION['email']=$d_1['email'];
      if($d_1['level']=="admin"){
        header("location:dashboard.php");
      }else if($d_1['level']=="dokter"){
        header("location:dashboard2.php");
      }else if($d_1['level']=="user"){
        header("location:dashboard2.php");
      }else{
      die("password salah <a href=\"javascript:history.back()\">kembali</a>");
      }
    }
  }else if($op=="out"){
    unset($_SESSION['username']);
    unset($_SESSION['level']);
    echo "<script>alert ('Login gagal')</script>";
    header("refresh:0;location:login.php");
  }
?>