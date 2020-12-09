        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">EDIT MAKANAN KHAS</h1>
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
$edit=mysqli_query($koneksi, "SELECT * from td_makakhasbr WHERE kdmakakhas='$e'");
$book = mysqli_fetch_array($edit);

echo "<pre>";
print_r ($book);
echo"</pre>";
?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
Edit Makanan
</div>

<form method="post" enctype="multipart/form-data">
<div class="form-group">
<label>Makanan Khas</label>

</div>
<div class="form-group">
    <img src="mkb/<?php echo $book['gambar']?>" width="200">
</div>
<div class="form-group">
    <label>Ganti Gambar</label>
    <input type="file" name="gambar" class="form-control">
</div>
<div>    
    <input type="text" name="judul" class="form-control" value="<?php echo $book['judul'];?>">
</div><br>
<div>
    <input type="text" name="isi" class="form-control" value="<?php echo $book['isi'];?>"> 
</div><br>

<input type="submit" value="Simpan" name="simpan">

<a  href="index.php?module=datamkb/dtmkb" >Kembali</a>
</form>


<?php 
if (isset($_POST['simpan']))
{
    $namafoto=$_FILES['file']['name'];
    $lokasifoto=$_FILES['file']['tmp_name'];

    $jd =$_POST['judul'];
    $isi =$_POST['isi'];


    if (!empty($lokasifoto))
    {
        move_uploaded_file($lokasifoto,"mkb/$namafoto");
        $koneksi->query("UPDATE td_makakhasbr SET file='$namafoto',judul='$jd',isi='$isi'
            WHERE kdmakakhas='$_GET[id]'");
            }
else
            {
        $koneksi->query("UPDATE td_makakhasbr SET judul='$jd',isi='$isi' WHERE kdmakakhas='$_GET[id]'");
            }
            echo "<script>alert('data telah dirubah');</script>";
            echo "<script>location='index.php?module=datamkb/dtmkb';</script>";
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