        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">INPUT MAKANAN KHAS BOGOR</h1>
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
$no = 1;
$qry_yankomas = mysqli_query($koneksi, "SELECT * from td_makakhasbr");

?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
<b>DATA MAKANAN KHAS BOGOR</b>
</div>
<a href="?module=datamkb/input_dtmkb" class="btn btn-success" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> TAMBAH DATA</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("?module=datamkb/input_dtmkb");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:20px;">
 
	<th style=" background: #E6E6FA;"><center>No</center></th>
	<th style=" background: #E6E6FA;">Gambar</th>
	<th style=" background: #E6E6FA;">Judul</th>
	<th style=" background: #E6E6FA;">Isi</th>
	<th style=" background: #E6E6FA;">Tanggal</th>
	<th style=" background: #E6E6FA;">Edit</th>
	<th style=" background: #E6E6FA;">Hapus</th>
	<?php 

	$query = "SELECT * FROM td_makakhasbr ORDER BY kdmakakhas DESC";	
  	$hasil = mysqli_query($koneksi, $query);
	while($data = mysqli_fetch_array($hasil)) { ?>
	<tr>
	 <td><?php echo $no++ ?></td>
	 <td><a href="mkb/<?php echo $data['gambar']; ?>"><img src="mkb/<?php echo $data['gambar']; ?>" widht="50" height="50"></td>
	 <td><?php echo $data['judul'] ?></td>
	 <td><?php echo $data['isi'] ?></td>
	 <td><?php echo $data['tgl_upload'] ?></td>
	 <td>
	 	<a href="?module=datamkb/edit_dtmkb&id=<?php echo $data['kdmakakhas']; ?>">
	 	<span class="glyphicon glyphicon-pencil"></span></a>
	 	</td>
	 	<td>  
	 	<a href="?module=datamkb/hapus_dtmkb&id=<?php echo $data['kdmakakhas']; ?>"onclick="return confirm('Delete?');">
	 	<span class="glyphicon glyphicon-trash"></span> </a> 
	</tr>
	<?php } ?>
</table>
</div>
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
        