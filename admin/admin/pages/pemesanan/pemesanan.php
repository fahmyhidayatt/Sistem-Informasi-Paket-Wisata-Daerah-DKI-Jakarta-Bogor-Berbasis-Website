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
$no = 1;
$qry_yankomas = mysqli_query($koneksi, "SELECT * from td_booking");

?>
<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
<b>DATA PEMESANAN</b>
</div>
<a href="?module=pemesanan/input_pemesanan" class="btn btn-success" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> TAMBAH DATA</span></a>
<?php
@$aksi = $_GET['aksi'];
if($aksi=="input")
{
	include("?module=pemesanan/input_pemesanan");
}
?>
<div class="th">
<table class="table table-bordered" style="margin-top:20px;">
 
	<th style=" background: #E6E6FA;"><center>No</center></th>
	<th style=" background: #E6E6FA;"><center>No Registrasi</center></th>
	<th style=" background: #E6E6FA;">Nama</th>
	<th style=" background: #E6E6FA;">Alamat</th>
	<th style=" background: #E6E6FA;">Email</th>
	<th style=" background: #E6E6FA;">Telfon</th>
	<th style=" background: #E6E6FA;">Tujuan</th>
	<th style=" background: #E6E6FA;"><center>Jumlah Orang</center></th>
	<th style=" background: #E6E6FA;"><center>Tgl Berangkat</center></th>
	<th style=" background: #E6E6FA;"><center>Tgl Pulang</center></th>
	<th style=" background: #E6E6FA;"><center>Keterangan</center></th>
	<th style=" background: #E6E6FA;"><center>Edit</center></th>
	<th style=" background: #E6E6FA;"><center>Delete</center></th>
	<th style=" background: #E6E6FA;"><center>Print</center></th>
	<?php 

	$query = "SELECT * FROM td_booking ORDER BY kdbooking DESC";
  	$hasil = mysqli_query($koneksi, $query);
	while($data = mysqli_fetch_array($hasil)) { ?>
	<tr>
	 <td><?php echo $no++ ?></td>
	 <td><?php echo $data['id_login'] ?></td>
	 <td><?php echo $data['username'] ?></td>
	 <td><?php echo $data['alamat'] ?></td>
	 <td><?php echo $data['email'] ?></td>
	 <td><?php echo $data['tlp'] ?></td>
	 <td><?php echo $data['tujuan'] ?></td>
	 <td><?php echo $data['jumo'] ?></td>
	 <td><?php echo $data['tglb'] ?></td>
	 <td><?php echo $data['tglp'] ?></td>	 
	 <td><?php echo $data['keterangan'] ?></td>


	
	 
	 <td>
	 	<a href="?module=pemesanan/edit_pemesanan&id=<?php echo $data['kdbooking']; ?>">
	 	<span class="glyphicon glyphicon-pencil"></span></a> </td><td>
	 	<a href="?module=pemesanan/hapus_pemesanan&id=<?php echo $data['kdbooking']; ?>" onclick="return confirm('Delete?');">
	 	<span class="glyphicon glyphicon-trash"></span>    </a> </td> <td>
	 	<a href="?module=pemesanan/print_pemesanan&id=<?php echo $data['kdbooking']; ?>" target="_blank">
	 	<span class="glyphicon glyphicon-print"></span></a> </td> 
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
        