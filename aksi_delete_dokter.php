<?php
    include "koneksi.php";
    $id=$_GET['id_dokter'];
    $a="DELETE FROM dokter WHERE id_dokter='$id'";
    $b=$koneksi->query($a);
    echo"<script> alert('Data berhasil dihapus');
    document.location='datadokter.php'</script>";
?>