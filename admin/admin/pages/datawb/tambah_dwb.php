<?php
include "koneksi.php";



    $folder = "gambar/";
    $nama = $_FILES['gambar']['name'];
    $lokasi =$_FILES['gambar']['tmp_name'];

    $jdl = $_POST['judul'];
    $isi = $_POST['isi'];

    if (move_uploaded_file($lokasi, $folder.$nama)){
        $sql_add=$koneksi-> query ("INSERT INTO td_wisatabr (gambar,judul,isi) VALUES('$nama','$jdl','$isi')");
    
    echo '<script>alert("Data Berhasil Tersimpan");window.location = "?module=datawb/dtwb ; </script>';
        } else {
    echo  '<script>alert("Data Gagal Tersimpan");window.location = "?module=datawb/input_dwb  ; </script>';

}

?>
