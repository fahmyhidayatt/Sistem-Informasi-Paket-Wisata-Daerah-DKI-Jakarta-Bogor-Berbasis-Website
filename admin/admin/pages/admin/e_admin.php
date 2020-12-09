<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
if(isset($_POST["simpan"])){
$id   = $_POST['id_login'];
$nama = $_POST['username'];
$almt = $_POST['alamat'];
$eml  = $_POST['email'];
$tlp  = $_POST['tlp'];
$tjn  = $_POST['tujuan'];
$jum  = $_POST['jumo'];
$tb   = $_POST['tglb'];
$tp   = $_POST['tglp'];
$ket  = $_POST['keterangan'];


// query SQL untuk insert data
mysqli_query($koneksi, "UPDATE td_booking SET username='$nama',alamat='$almt',email='$eml',tlp='$tlp',tujuan='$tjn',jumo='$jum',tglb='$tb',tglp='$tp',keterangan='$ket' where id_login='$id'");

echo "<script>alert('Data Sukses Diubah);
                window.location='index.php?module=pemesanan/pemesanan';
            </script>";
}
?>