<?php
include "koneksi.php";
    $hapus = mysqli_query($koneksi,"DELETE FROM td_bkmr WHERE kdsewa='$_GET[id]'");
echo "<script>alert('Data Sukses Terhapus');
				window.location='index.php?module=penyewaan_motor/penyewaan_motor';
			</script>";
 ?>