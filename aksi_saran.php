<?php
    session_start(); 
    include "koneksi.php";
    $id=$_GET['id_konsul'];
    $nama_dokter=$_POST['nama_dokter'];
    $penyakit=$_POST['penyakit'];
    $saran=$_POST['saran'];
    $no=0;
    if(isset($_POST['upload'])){
      $file_name=$_FILES['resep']['name'];
      $x=explode(".",$file_name);
      $extensi=strtolower(end($x));
      $extensi_gambar=['jpg','jpeg','png'];
      if(!in_array($extensi, $extensi_gambar)){
        echo "<script>alert('yang anda upload bukan gambar')</script>";
        header('refresh:0;saran.php');
      }else{
        $file_size=$_FILES['resep']['size'];
        if($file_size>2000000){
          echo "<script>alert('file anda terlalu besar')</script>";
          header('refresh:0;konsul.php');
        }else{
          $file_tmp=$_FILES['resep']['tmp_name'];
          $direktori='resep_dokter/';
          $link_file=$direktori.$file_name;
          $upload=move_uploaded_file($file_tmp,$link_file);
          $sql="INSERT INTO saran_konsul (id_saran, id_konsul, nama_dokter, nama_penyakit, saran, resep) VALUES ('".$no."','".$id."','".$nama_dokter."','".$penyakit."','".$saran."','".$link_file."')";
          $query=$koneksi->query($sql);
          if($sql){
            echo"<script> alert('Data berhasil disimpan')</script>";
            header("refresh:0;konsul.php");
          }else{
            echo"<script> alert('Data tidak berhasil disimpan')</script>";
            header("refresh:0;konsul.php");
          }
        }
      }
    }
?>