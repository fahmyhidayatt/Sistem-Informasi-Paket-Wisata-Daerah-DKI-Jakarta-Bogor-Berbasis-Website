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
$e=$_GET['id'];
$edit=mysqli_query($koneksi, "SELECT * from td_booking WHERE kdbooking ='$e'");
$book = mysqli_fetch_array($edit);
// membuat data tujuan menjadi dinamis dalam bentuk array
$tujuan    = array('JAKARTA', 'BOGOR');
// membuat data jumlah menjadi dinamis dalam bentuk array
$jum    = array('1','2','3','4','5','6','7','8','9','10','11','12');
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
Edit Pemesanan Tour
</div>
 		<form method="post" action="?module=pemesanan/e_pemesanan" enctype="multipart/form-data">
            <table>

                <tr><td>Nama</td><td><input type="text" value="<?php echo $book['id_login'];?>" name="id_login"></td></tr>
                <tr><td>Nama</td><td><input type="text" value="<?php echo $book['username'];?>" name="username"></td></tr>
                <tr><td>Alamat</td><td><input type="text" value="<?php echo $book['alamat'];?>" name="alamat"></td></tr>
                <tr><td>Email</td><td><input type="text" value="<?php echo $book['email'];?>" name="email"></td></tr>
                <tr><td>Telepon</td><td><input type="text" value="<?php echo $book['tlp'];?>" name="tlp"></td></tr>
                <tr><td>Tujuan </td><td>
                        <select name="tujuan">
                            <?php
                            foreach ($tujuan as $t){
                                echo "<option value='$t' ";
                                echo $book['tujuan']==$t?'selected="selected"':'';
                                echo ">$t</option>";
                            }
                            ?>
                        </select> [ <?php echo $book['tujuan'];?> ]
                </td></tr>
                <tr><td>Jumlah</td><td>
                        <select name="jumo">
                            <?php
                            foreach ($jum as $j){
                                echo "<option value='$j' ";
                                echo $book['jumo']==$j?'selected="selected"':'';
                                echo ">$j</option>";
                            }
                            ?>
                        </select> [ <?php echo $book['jumo'];?> ]
                </td></tr>
                <tr><td>tgl b</td><td><input value="<?php echo $book['tglb'];?>" type="date" name="tglb"></td></tr>
                <tr><td>tgl p</td><td><input value="<?php echo $book['tglp'];?>" type="date" name="tglp"></td></tr>
                <tr><td>Keterangan</td><td><input value="<?php echo $book['keterangan'];?>" type="text" name="keterangan"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan" name="simpan">SIMPAN PERUBAHAN</button>
                        <a href="?module=pemesanan/pemesanan">Kembali</a></td></tr>
            </table>
        </form>

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