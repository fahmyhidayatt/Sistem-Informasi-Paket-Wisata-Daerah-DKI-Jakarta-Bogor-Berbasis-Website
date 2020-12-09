<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
if(isset($_POST["simpan"])){
$id   = $_POST['id_login'];
$nama = $_POST['username'];
$almt = $_POST['alamat'];
$tlp  = $_POST['tlp'];
$eml  = $_POST['email'];
$tjn  = $_POST['namak'];
$jum  = $_POST['jumlah'];
$tb   = $_POST['tglsewa'];
$tp = $_POST['tglkembali'];
$ket= $_POST['keterangan'];


// query SQL untuk insert data
$query="UPDATE td_bkmr SET username='$nama',
alamat='$almt',
tlp='$tlp', 
email='$eml',
namak='$tjn',
jumlah='$jum',
tglsewa='$tb',
tglkembali='$tp',
keterangan='$ket'
WHERE id_login=$id";
mysqli_query($koneksi, $query);
echo "<script>alert('data telah dirubah');</script>";
echo "<script>location='?module=penyewaan_motor/penyewaan_motor';</script>";

}

        	
?>