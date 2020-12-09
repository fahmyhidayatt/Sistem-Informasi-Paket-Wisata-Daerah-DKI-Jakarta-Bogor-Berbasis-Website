

<?php
/*proses submit*/
        if(isset ($_POST['simpan'])){
            include "koneksi.php"; 
            $insert = mysqli_query($koneksi, "INSERT INTO td_booking VALUES 
                (NULL, 
                 '".$_POST['id_login']."',
                '".$_POST['username']."',
                '".$_POST['alamat']."',
                '".$_POST['email']."',
                '".$_POST['tlp']."',
                '".$_POST['tujuan']."',
                '".$_POST['jumo']."',
                '".$_POST['tglb']."',
                '".$_POST['tglp']."',
                '".$_POST['keterangan']."')");
            if($insert){
                echo '<script>alert("TERIMAKASIH , TUNGGU PIHAK KAMI AKAN MENGHUBUNGI ANDA");window.location =("tourp.php") </script>';
            }else{
                echo '<script>alert("Maaf Anda Tidak Mengisi Dengan Benar");window.location =("booktour.php") </script>';
            }
        }
    ?>