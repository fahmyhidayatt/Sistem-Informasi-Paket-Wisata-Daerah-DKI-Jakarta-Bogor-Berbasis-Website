        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ADMIN</h1>
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
$qry_yankomas = mysqli_query($koneksi, "SELECT * from td_admin");

?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
<b>DATA ADMIN</b>
</div>
<a href="?module=admin/input_admin" class="btn btn-success" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> TAMBAH DATA</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("?module=admin/input_admin");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:20px;">
 
	
	<th style=" background: #E6E6FA;">Nama</th>
	<th style=" background: #E6E6FA;">Password</th>
	<th style=" background: #E6E6FA;"><center>Edit</center></th>
	<th style=" background: #E6E6FA;"><center>Hapus</center></th>

	<?php 

	$query = "SELECT * FROM td_admin ORDER BY id_admin DESC";
  	$hasil = mysqli_query($koneksi, $query);
	while($data = mysqli_fetch_array($hasil)) { ?>
	<tr>
 
	 <td><?php echo $data['username'] ?></td>
	 <td><?php echo $data['password'] ?></td>
	 

	
	 
	 <td>
        <center>
	 	<a href="?module=admin/edit_admin&id=<?php echo $data['id_admin']; ?>">
	 	<span class="glyphicon glyphicon-pencil"></span></a> </td> </center>
           <td> <center>
	 	<a href="?module=admin/hapus_admin&id=<?php echo $data['id_admin']; ?>" onclick="return confirm('Delete?');">
	 	<span class="glyphicon glyphicon-trash"></span> </a></td>  </center>
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
        