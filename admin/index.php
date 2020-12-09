<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Halaman Login Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/login.css" />
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>

      body{

      }
    </style>



</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >
 
   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
       
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active"><br><?php

$koneksi = new mysqli ("localhost","root","","pariwisata");


if(@$_POST["login"]){ //jika tombol Login diklik
  $user=$_POST["username"];
  $pass=$_POST["password"];
  $level=$_POST["level"];
  if($level=="admin"){
    $tabel="td_admin";
  }else{
    $tabel="td_login";}
    if($user!="" && $pass!=""){

      $em = mysqli_query($koneksi,"select * from $tabel where password = '$pass' AND username = '$user'");
      $data = mysqli_fetch_assoc($em);

      if($data["username"] == $user && $data["password"] == $pass){
        echo "<div class='alert alert-success alert-dismissable'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        Login Anda Berhasil 
        </div>";
        $_SESSION["user"]=$data["username"];
        $_SESSION["pass"]=$data["password"];
        if($level=="customer"){

          ?>


          <script>alert ("Selamat Datang '<?php echo $_SESSION['user']; ?>'")
        window.location.href='../admin/pages/index.php'</script>
        exit;
        <?php

      }else{
        ?>
        <script>alert ("Selamat Datang 'Admin'")
      window.location.href='../admin/admin/pages/index.php'</script>
      exit;
      <?php
    }
    ?>
    <?php
  }else{
    echo "<center><div class='alert alert-warning alert-dismissable'>
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    <b>Mohon Ulangi Lagi !! Data Tidak Ditemukan!!</b>
    </div><center>";
  }
}

}
?>

		<center> <img src="../img/joker.png"></center> <br>

            <form action="" method="post" class="form-signin">

                <input type="text" autofocus required name="username" placeholder="Username" class="form-control" />
				<input type="hidden" name="level" value="admin">
                <input type="password" required name="password" placeholder="Password" class="form-control" />
			<center>	<input type="submit" name="login" value="Login" class="btn btn-info"/> </center>
					 
            </form>
			
        </div>
    </div>

    


</div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="js/jquery-2.0.3.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
