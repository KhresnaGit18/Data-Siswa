<?php
//include koneksi database
include('koneksi.php');

//get data dari form hehe
$nisn =$_POST['nisn'];
$nama_lengkap=$_POST['nama_lengkap'];
$alamat =$_POST['alamat'];

//query insert data ke dalam database
$query ="INSERT INTO tabel_siswa
(nisn,nama_lengkap,alamat)VALUES
('$nisn','$nama_lengkap','$alamat')";

//kondisi pengecekan berhasil atau engga
if($connection->query($query)){

    //redirect ke halamat index.php
    header("location:index.php");
}else{
    //pesan error gagal insert data 
    echo "Data Gagal Disimpan";
}
?>