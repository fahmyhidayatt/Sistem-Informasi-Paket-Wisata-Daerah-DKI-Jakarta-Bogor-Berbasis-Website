

<?php
/*proses submit*/
        if(isset ($_POST['simpan'])){
            include "koneksi.php"; 
            $insert = mysqli_query($koneksi, "INSERT INTO td_admin VALUES 
                (NULL, 
      
                '".$_POST['username']."',
                '".$_POST['password']."')");
            if($insert){
                echo '<script>alert("TERIMAKASIH , DATA ADMIN DI TAMBAH");window.location =("?module=admin/admin") </script>';
            }else{
                echo '<script>alert("Maaf Anda Tidak Mengisi Dengan Benar");window.location =("?module=admin/input_admin") </script>';
            }
        }
    ?>