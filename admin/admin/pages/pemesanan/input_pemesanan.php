        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pemesanan Tour</h1>
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
TAMBAH DATA PEMESANAN
	</div>
	<form method="post" class="form-group" action="?module=pemesanan/tambah_pemesanan" enctype="multipart/form-data" style="margin-top:20px;">
    
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
        <label>Email</label>
        <input type="text" class="form-control" name="email" required="">
    </div><br>
      <div class="form-grup">
        <label>Telfon</label>
        <input type="text" class="form-control" name="tlp" required="">
    </div><br>
    <div class="form-grup">
        <label>Tujuan</label>
        <br>
        <SELECT style="position: center;border-radius: 4px;padding: 6px 200px;" name="tujuan">
              <option value="DKI Jakarta">DKI Jakarta</option>
              <option value="DKI Jakarta">Bogor</option>
              <br></SELECT>
    </div><br>
    <div class="form-grup">
        <label>Jumlah Orang</label>
        <br>
        <SELECT style="position: center;border-radius: 4px;padding: 6px 200px;" name="jumo">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="2">3</option>
              <option value="2">4</option>
              <option value="2">5</option>
              <option value="2">6</option>
              <option value="2">7</option>
              <option value="2">8</option>
              <option value="2">9</option>
              <option value="2">10</option>
              <option value="2">11</option>
              <option value="2">12</option>

              <br></SELECT>
    </div><br>
    <div class="form-grup">
        <label>Tanggal Berangkat</label>
        <input type="date" class="form-control" name="tglb" required="">
    </div><br>
    <div class="form-grup">
        <label>Tanggal Pulang</label>
        <input type="date" class="form-control" name="tglp" required="">
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
            </div>
            <!-- /.row -->