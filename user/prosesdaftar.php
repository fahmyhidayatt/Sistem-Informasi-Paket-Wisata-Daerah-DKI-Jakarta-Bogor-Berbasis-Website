<?php
$koneksi = new mysqli ("localhost","root","","pariwisata");

$username = $_POST['username'];
   $pass = $_POST['password'];
$email = $_POST['email'];
   $sql = "SELECT * FROM td_login WHERE username = '$username'";
   $query = $koneksi->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
     } else {
       $data = "INSERT INTO td_login VALUES (NULL,'$username','$pass','$email')";
       $simpan = $koneksi->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>