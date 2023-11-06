<?php
    session_start();
    include "koneksi.php";
    $id=$_GET["id"];
    unset($_SESSION['data_beli'][$id]);
    header("location:data_beli.php");
?>