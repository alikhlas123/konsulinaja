<?php
    include "koneksi.php";
    $nama=$_POST['nama'];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];
    $no=0;
    if(isset($_POST['upload'])){
        $direktori="foto_produk/";
        $file_name=$_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'],$direktori.$file_name);
        $sql="INSERT INTO obat (kode_obat, nama, jenis, harga, foto) VALUES ('".$no."','".$nama."','".$jenis."','".$harga."','".$file_name."')";
        $query=$koneksi->query($sql);
        if($query===true){
            echo "<script>alert('Data berhasil ditambahkan')</script>";
            header('refresh:0;data_obat.php');
        }else{
            echo "<script>alert('Data gagal ditambahkan')</script>";
            header('refresh:0;obat.php');
        }
      }
?>