<?php
    include "koneksi.php";
    $username=$_POST['username'];
    $spesialist=$_POST['spesialist'];
    $id_daerah=$_POST['id_daerah'];
    $id_rs=$_POST['id_rs'];
    $waktu=$_POST['waktu'];
    $no_hp=$_POST['no_hp'];
    $status=0;
    $no=0;
    if(isset($_POST['upload'])){
        $file_name=$_FILES['foto']['name'];
        $x=explode(".",$file_name);
        $extensi=strtolower(end($x));
        $extensi_gambar=['jpg','jpeg','png'];
        if(!in_array($extensi, $extensi_gambar)){
            echo "<script>alert('yang anda upload bukan gambar')</script>";
            header('refresh:0;apply.php');
        }else{
            $file_size=$_FILES['foto']['size'];
            if($file_size>2000000){
                echo "<script>alert('file anda terlalu besar')</script>";
                header('refresh:0;apply.php');
            }else{
                $file_tmp=$_FILES['foto']['tmp_name'];
                $direktori="foto_dokter/";
                $link_file=$direktori.$file_name;
                $upload=move_uploaded_file($file_tmp,$link_file);
                $sql="INSERT INTO dokter (id_dokter, username_dokter, spesialist, id_daerah, id_rs, waktu, no_hp, foto, status) VALUES ('".$no."','".$username."','".$spesialist."','".$id_daerah."','".$id_rs."','".$waktu."','".$no_hp."','".$file_name."','".$status."')";
                $query=$koneksi->query($sql);
                if($query===true){
                    echo "<script>alert('Data berhasil ditambahkan')</script>";
                    header('refresh:0;jadwal.php');
                }else{
                    echo "<script>alert('Data gagal ditambahkan')</script>";
                    header('refresh:0;apply.php');
                }
            }
        }
    }
?>