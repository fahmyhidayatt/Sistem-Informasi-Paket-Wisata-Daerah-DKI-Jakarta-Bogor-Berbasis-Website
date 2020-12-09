<?php
include "koneksi.php";
    $hapus = mysqli_query($koneksi,"DELETE FROM td_admin WHERE id_admin='$_GET[id]'");
echo "<script>alert('Data Sukses Terhapus');
				window.location='index.php?module=admin/admin';
			</script>";
 ?>