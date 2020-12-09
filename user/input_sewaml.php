

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
                echo '<script>alert("Thanks You , Our Side Will Contact You");window.location =("rental.php") </script>';
            }else{
                echo '<script>alert("sorry you, dont fill in properly

");window.location =("bookml.php") </script>';
            }
        }
    ?>