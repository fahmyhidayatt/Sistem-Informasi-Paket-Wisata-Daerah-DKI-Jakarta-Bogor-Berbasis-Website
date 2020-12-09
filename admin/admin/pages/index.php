<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"> <i class="fa fa-user"> Halaman Admin </i></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a class="btn btn-primary"  onclick="konfirmasi()">Logout</a>
    <p id="pesan"></p>
 
    <script>
      function konfirmasi(){
         var tanya = confirm("Yakin Untuk Logout Admin?");
 
         if(tanya === true) {
             alert("Berhasil Logout Admin, Terimakasih");window.location =("../../index.php") ;
         }else{
            pesan = "";
         }
 
         document.getElementById("pesan").innerHTML = pesan;
      }
    </script>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      
                        <li>
                            <a href="index.php"><i class="fa fa-home"></i> Home </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-database"></i> Data Lisatour& Travel <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
                                     <a href="?module=pemesanan/pemesanan">PEMESANAN TOUR</a>                              
                                </li>
                                <li>
                                   <a href="?module=penyewaan_motor/penyewaan_motor">PENYEWAAN MOTOR</a>
                                </li>
								 <li>
                                    <a href="?module=penyewaan_mobil/penyewaan_mobil">PENYEWAAN MOBIL </a>
                                </li>
                                <li>
                                    <a href="?module=datawj/dtwj">INPUT WISATA JAKARTA </a>
                                </li>
                                <li>
                                    <a href="?module=datawb/dtwb">INPUT WISATA BOGOR</a>
                                </li>
                                <li>
                                    <a href="?module=datamkj/dtmkj">INPUT MAKANAN KHAS JAKARTA </a>
                                </li>
                                <li>
                                    <a href="?module=datamkb/dtmkb">INPUT MAKANAN KHAS BOGOR </a>
                                </li>
                                 <li>
                                    <a href="?module=admin/admin">ADMIN </a>
                                </li>


                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
                        <li>
                            <a href="#"><i class="fa fa-bolt"></i> Laporan <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
                                    <a href="?module=pemesanan/cetak_pemesanan">CETAK PEMESANAN TOUR</a>
                                </li>
								<li>
                                    <a href="?module=penyewaan_motor/cetak_penyewaan_motor">CETAK PENYEWAAN MOTOR</a>
                                </li>
                                <li>
                                    <a href="?module=penyewaan_mobil/cetak_penyewaan_mobil">CETAK PENYEWAAN MOBIL</a>
                                </li>
							</ul>
						</li>
                        
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

		<?php include"content.php"; ?>
        
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
