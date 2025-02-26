<?php

//deklarasi variabel
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="db_sekolah";

$connection= mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if($connection){
    } else {
        echo "koneksi Gagal!:".
 mysqli_connect_error();
    }
    ?>
