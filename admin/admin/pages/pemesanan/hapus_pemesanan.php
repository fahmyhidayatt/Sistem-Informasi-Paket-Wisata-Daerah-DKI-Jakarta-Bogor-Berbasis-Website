<?php
include "koneksi.php";
    $hapus = mysqli_query($koneksi,"DELETE FROM td_booking WHERE kdbooking='$_GET[id]'");
echo "<script>alert('Data Sukses Terhapus');
				window.location='index.php?module=pemesanan/pemesanan';
			</script>";
 ?>