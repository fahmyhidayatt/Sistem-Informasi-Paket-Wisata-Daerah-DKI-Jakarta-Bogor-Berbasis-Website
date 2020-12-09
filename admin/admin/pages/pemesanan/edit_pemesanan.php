            <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PEMESANAN TOUR</h1>
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
$edit=mysqli_query($koneksi, "SELECT * from td_booking WHERE kdbooking ='$id'");
$book = mysqli_fetch_array($edit);
// membuat data tujuan menjadi dinamis dalam bentuk array
$tujuan    = array('JAKARTA', 'BOGOR');
// membuat data jumlah menjadi dinamis dalam bentuk array
$jum    = array('1','2','3','4','5','6','7','8','9','10','11','12');
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
Edit Pemesanan Tour
</div>
        <form method="post" action="?module=pemesanan/proses_pemesanan" >
            <input type="hidden"  value="<?php echo $book['kdbooking'];?> "name="kdbooking">
      
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
        <label>Email</label>
       <input type="text" value="<?php echo $book['email'];?>" name="email"  required="" class="form-control">
    </div><br>
      <div class="form-grup">
        <label>Telfon</label>
       <input type="text" value="<?php echo $book['tlp'];?>" name="tlp" required="" class="form-control">
    </div><br>

        <div class="form-grup">
        <label>Tujuan </label>
                        <select name="tujuan" class="form-control" required="">
                            <?php
                            foreach ($tujuan as $t){
                                echo "<option value='$t' ";
                                echo $book['tujuan']==$t?'selected="selected"':'';
                                echo ">$t</option>";
                            }
                            ?>
                        </select> [ <?php echo $book['tujuan'];?> ]
                </td></tr> </div></br>


                <div class="form-grup">
                <label>Jumlah</label>
                        <select name="jumo" class="form-control required">
                            <?php
                            foreach ($jum as $j){
                                echo "<option value='$j'";
                                echo $book['jumo']==$j?'selected="selected"':'';
                                echo ">$j</option>" ;
                            }
                            ?>

                        </select> [<?php echo $book['jumo'];?>]
                </td></tr>

    <div class="form-grup">
        <label>Tanggal Berangkat</label>
        <input value="<?php echo $book['tglb'];?>" type="date" name="tglb" required="" class="form-control" >
    </div><br>
    <div class="form-grup">
        <label>Tanggal Pulang</label>
        <input value="<?php echo $book['tglp'];?>" type="date" name="tglp" required="" class="form-control" >
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