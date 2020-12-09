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
	?>
		<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
TAMBAH DATA ADMIN
	</div>
	<form method="post" class="form-group" action="?module=admin/tambah_admin" enctype="multipart/form-data" style="margin-top:20px;">
  
      
    <div class="form-grup">
        <label>Nama</label>
        <input type="text" class="form-control" name="username" required="">
    </div><br>
    <div class="form-grup">
        <label>Password</label>
        <input type="Password" class="form-control" name="password" required="">
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