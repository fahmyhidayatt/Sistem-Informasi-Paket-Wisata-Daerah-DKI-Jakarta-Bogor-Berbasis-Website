<?php
include "koneksi.php";



    $folder = "gambar/";
    $nama = $_FILES['gambar']['name'];
    $lokasi =$_FILES['gambar']['tmp_name'];

    $jdl = $_POST['judul'];
    $isi = $_POST['isi'];

    if (move_uploaded_file($lokasi, $folder.$nama)){
        $sql_add=$koneksi-> query ("INSERT INTO td_makakhasbr (gambar,judul,isi) VALUES('$nama','$jdl','$isi')");
    
    echo '<script>alert("Data Berhasil Tersimpan");window.location = "?module=datamkb/datamkb ; </script>';
        } else {
    echo  '<script>alert("Data Gagal Tersimpan");window.location = "?module=datamkb/input_dtmkb  ; </script>';

}

?>
