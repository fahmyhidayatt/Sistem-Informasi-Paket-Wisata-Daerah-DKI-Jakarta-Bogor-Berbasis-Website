        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PENYEWAAN MOTOR</h1>
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
TAMBAH DATA MOTOR
	</div>
	   <form method="post" class="form-group" action="?module=penyewaan_motor/tambah_penyewaan_motor" enctype="multipart/form-data" style="margin-top:20px;">
          <div class="form-grup">
        <label>No langganan</label>
        <input type="text" class="form-control" name="id_login" required="">
    </div><br>
    <div class="form-grup">
        <label>Nama</label>
        <input type="text" class="form-control" name="username" required="">
    </div><br>
    <div class="form-grup">
        <label>Alamat</label>
        <input type="text" class="form-control" name="alamat" required="">
    </div><br>
      <div class="form-grup">
        <label>Telfon</label>
        <input type="text" class="form-control" name="tlp" required="">
    </div><br>
      <div class="form-grup">
        <label>Email</label>
        <input type="text" class="form-control" name="email" required="">
    </div><br>
    <div class="form-grup">
        <label>Nama Kendaraan</label>
        <br>
        <SELECT style="position: center;border-radius: 4px;padding: 6px 200px;" name="namak">
              <option value="Honda Pcx">Honda Pcx</option>
              <option value=">Yamaha Nmx">Yamaha Nmx</option>
              <option value=">Honda Scoopy">Honda Scoopy</option>
              <br></SELECT>
    </div><br>
    <div class="form-grup">
        <label>Jumlah</label>
        <br>
        <SELECT style="position: center;border-radius: 4px;padding: 6px 200px;" name="jumlah">
              <option value="1">1</option>
           
              <br></SELECT>
    </div><br>
    <div class="form-grup">
        <label>Tanggal Sewa</label>
        <input type="date" class="form-control" name="tglsewa" required="">
    </div><br>
    <div class="form-grup">
        <label>Tanggal Kembali</label>
        <input type="date" class="form-control" name="tglkembali" required="">
    </div><br>
    <div class="form-grup">
        <label>Keterangan</label>
        <input type="text" class="form-control" name="keterangan" required="">
    </div><br>
    <input type="submit" name="simpan" value="simpan" class="btn btn-success"><br>
    

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
     