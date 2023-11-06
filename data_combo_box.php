<?php
    include "koneksi.php";
    $id=$_POST['id'];
    $modul=$_POST['modul'];
    if($modul=='Lokasi Praktek'){
        $sql="SELECT * FROM rs WHERE id_daerah='$id'";
        $query=$koneksi->query($sql);
        $praktek="<option>---Pilih---</option>";
        while ($data=$query->fetch_array()){
            $praktek='<option value="'.$data['id_rs'].'">'.$data['nama'].'</option>';
        }
        echo $praktek;
    }
?>