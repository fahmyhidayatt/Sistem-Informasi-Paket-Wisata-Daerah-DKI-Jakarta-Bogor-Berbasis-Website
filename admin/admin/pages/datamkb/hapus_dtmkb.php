<?php
include "koneksi.php";



    $hapus = mysqli_query($koneksi,"DELETE FROM td_makakhasbr WHERE kdmakakhas ='$_GET[id]'");
echo "<script>alert('Data Sukses Terhapus');
				window.location='index.php?module=datamkb/dtmkb';
			</script>";
 ?>