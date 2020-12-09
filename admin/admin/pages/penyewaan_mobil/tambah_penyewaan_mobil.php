

<?php
/*proses submit*/
        if(isset ($_POST['simpan'])){
            include "koneksi.php"; 
            $insert = mysqli_query($koneksi, "INSERT INTO td_bkml VALUES 
                (NULL, 
                 '".$_POST['id_login']."',
                '".$_POST['username']."',
                '".$_POST['alamat']."',
                '".$_POST['tlp']."',
                '".$_POST['email']."',
                '".$_POST['namak']."',
                '".$_POST['jumlah']."',
                '".$_POST['tglsewa']."',
                '".$_POST['tglkembali']."',
                '".$_POST['keterangan']."')");
            if($insert){    
                echo '<script>alert("TERIMAKASIH , TUNGGU PIHAK KAMI AKAN MENGHUBUNGI ANDA");window.location =("?module=penyewaan_mobil/penyewaan_mobil") </script>';
            }else{
                echo '<script>alert("Maaf Anda Tidak Mengisi Dengan Benar");window.location =("?module=penyewaan_mobil/input_penyewaan_mobil ") </script>';
            }
        }
    ?>