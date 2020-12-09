            <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PENYEWAAN MOBIL</h1>
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
$id=$_GET['id'];
$edit=mysqli_query($koneksi, "SELECT * from td_bkml WHERE kdsewa ='$id'");
$book = mysqli_fetch_array($edit);

$namak    = array('SUZUKI APV', 'TOYOTA AVANZA');
// membuat data jumlah menjadi dinamis dalam bentuk arrayHONDA SCOOPY
$jum    = array('1');
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
Edit Penyewaan Motor
</div>


      <form method="post" action="?module=penyewaan_mobil/proses_penyewaan">
            <input type="hidden"  value="<?php echo $book['kdsewa'];?> "name="kdsewa">
      
      
           <div class="form-grup">
        <label>No langganan</label>
        <input type="text" value="<?php echo $book['id_login'];?>" name="id_login" required="" class="form-control">
    </div><br>
    <div class="form-grup">
        <label>Nama</label>
       <input type="text" value="<?php echo $book['username'];?>" name="username"  required="" class="form-control">
    </div><br>
    <div class="form-grup">
        <label>Alamat</label>
        <input type="text" value="<?php echo $book['alamat'];?>" name="alamat"  required="" class="form-control">
    </div><br>
      <div class="form-grup">
        <label>Telfon</label>
       <input type="text" value="<?php echo $book['tlp'];?>" name="tlp" required="" class="form-control">
    </div><br>
      <div class="form-grup">
        <label>Email</label>
       <input type="text" value="<?php echo $book['email'];?>" name="email"  required="" class="form-control">
    </div><br>
    <div class="form-grup">
        <label>Nama Kendaraan</label>
                        <select name="namak" class="form-control" required="">
                            <?php
                            foreach ($namak as $t){
                                echo "<option value='$t' ";
                                echo $book['namak']==$t?'selected="selected"':'';
                                echo ">$t</option>";
                            }
                            ?>
                        </select> [ <?php echo $book['namak'];?> ]
                </td></tr> </div></br>


                <div class="form-grup">
                <label>Jumlah</label>
                        <select name="jumlah" class="form-control required">
                            <?php
                            foreach ($jum as $j){
                                echo "<option value='$j'";
                                echo $book['jumlah']==$j?'selected="selected"':'';
                                echo ">$j</option>" ;
                            }
                            ?>

                        </select> [<?php echo $book['jumlah'];?>]
                </td></tr>

    <div class="form-grup">
        <label>Tanggal Sewa</label>
        <input value="<?php echo $book['tglsewa'];?>" type="date" name="tglsewa" required="" class="form-control" >
    </div><br>
    <div class="form-grup">
        <label>Tanggal Kembali</label>
        <input value="<?php echo $book['tglkembali'];?>" type="date" name="tglkembali" required="" class="form-control" >
    </div><br>
    <div class="form-grup">
        <label>Keterangan</label>
       <input value="<?php echo $book['keterangan'];?>" type="text" name="keterangan" required="" class="form-control">
    </div><br>
    <input type="submit" name="simpan" value="simpan" class="btn btn-success"><br>
</form>
<?php

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