<?php
    include "koneksi.php";
    $username=$_POST['username'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    $no_hp=$_POST['no_hp'];
    $no=0;
    if(isset($_POST['upload'])){
        $file_name=$_FILES['resep']['name'];
        $file_size=$_FILES['resep']['size'];
        if($file_size>2000000){
            echo "<script>alert('file anda terlalu besar')</script>";
            header('refresh:0;resep_beli.php');
        }else{
            $file_tmp=$_FILES['resep']['tmp_name'];
            $direktori="resep_dokter/";
            $link_file=$direktori.$file_name;
            $upload=move_uploaded_file($file_tmp,$link_file);
            $sql="INSERT INTO order (id_beli, username, nama, email, alamat, no_hp, resep) VALUES ('".$no."','".$username."','".$nama."','".$email."','".$alamat."','".$no_hp."','".$link_file."')";
            $query=$koneksi->query($sql);
            if($query===true){
                echo "<script>alert('Data berhasil ditambahkan')</script>";
                header('refresh:0;beli.php');
            }else{
                echo "<script>alert('Data gagal ditambahkan')</script>";
                header('refresh:0;resep_beli.php');
            }
        }
    }
?>