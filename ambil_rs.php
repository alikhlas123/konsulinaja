<?php
    include "koneksi.php";
    $daerah=$_GET['id_daerah'];
    $sql="SELECT * FROM rs WHERE id_daerah='$daerah'";
    $query=$koneksi->query($sql);
    echo "<option>---Pilih Rumah Sakit---</option>";
    while ($data=$query->fetch_array()){
        echo "<option value=$data[id_rs]> $data[nama_rs]</option>";
    }
    
?>