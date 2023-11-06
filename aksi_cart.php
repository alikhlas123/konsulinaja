<?php
    session_start();
    include "koneksi.php";
    $id=$_GET["kode_obat"];
    if(isset($_SESSION['data_beli'][$id])){
        $_SESSION['data_beli'][$id]+=1;
    }else{
        $_SESSION['data_beli'][$id]=1;
    }

    header("location:proses_order.php")
?>