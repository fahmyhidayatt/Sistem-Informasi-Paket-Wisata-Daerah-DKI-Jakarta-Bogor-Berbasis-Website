<?php
include "koneksi.php";



    $hapus = mysqli_query($koneksi,"DELETE FROM td_wisata WHERE kdwisata ='$_GET[id]'");
echo "<script>alert('Data Sukses Terhapus');
				window.location='index.php?module=datawb/dtwb';
			</script>";
 ?>