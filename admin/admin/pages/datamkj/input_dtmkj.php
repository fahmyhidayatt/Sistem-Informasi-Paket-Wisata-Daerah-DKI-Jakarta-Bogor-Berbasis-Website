        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">INPUT MAKANAN KHAS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
    <?php
    include"koneksi.php";
    ?>
        <div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
TAMBAH DATA MAKANAN KHAS DKI JAKARTA
    </div>
    <form method="post"   class="form-group"  enctype="multipart/form-data" style="margin-top:20px;">
        <input type="file" name="gambar" class="form-control"><br>
        <input type="text" name="judul" placeholder="Judul" class="form-control"><br>
        <TEXTAREA type="" name="isi" placeholder="Deskripsi" class="form-control"></TEXTAREA><br>

        <input type="submit" name="simpan" value="simpan" class="btn btn-success"><br>

    </form>
    <?php

                        if (isset($_POST['simpan'])) {
                            include "koneksi.php";
                            

                            $namef = $_FILES['gambar']['name'];
                            $pndah = $_FILES['gambar']['tmp_name'];
                            
                            $nama = $_POST["judul"];
                            $lokasi = $_POST["isi"];

                            move_uploaded_file($pndah,'mkj/'.$namef);
                            $insert = mysqli_query($koneksi, "INSERT INTO td_makakhas (gambar,judul,isi) VALUES ('$namef','$nama','$lokasi')");
                            if($insert){
                                echo '<script>alert("Berhasil Menginput Data, Cek Info");window.location =("?module=datamkj/dtmkj") </script>';
                            }else{
                                echo '<script>alert("Maaf Anda Tidak Mengisi Dengan Benar");window.location =("?module=datamkj/input_dtmkj") </script>';
                            }
                        
                    }
                        ?>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
               
                <!-- /.col-lg-6 -->
            
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->