<?php
    include "koneksi.php";
    $nama_pasien=$_POST['nama_pasien'];
    $jadwal=$_POST['jadwal'];
    $dokter=$_POST['dokter'];
    $alamat=$_POST['alamat'];
    $status=0;
    $no=0;
    $sql="INSERT INTO konsul_offline (id, nama_pasien, jadwal, id_dokter, alamat, keputusan) VALUES ('".$no."','".$nama_pasien."','".$jadwal."','".$dokter."','".$alamat."','".$status."')";
    $query=$koneksi->query($sql);
    if($query===true){
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        header('refresh:0;jadwal_offline.php');
    }else{
        echo "<script>alert('Data gagal ditambahkan')</script>";
        header('refresh:0;jadwal_offline.php');
    }
?>