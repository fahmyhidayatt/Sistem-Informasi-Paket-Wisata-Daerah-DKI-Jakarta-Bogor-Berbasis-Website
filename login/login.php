<?php

$koneksi = new mysqli ("localhost","root","","pariwisata");


if(@$_POST["submit_login"]){ //jika tombol Login diklik
  $user=$_POST["username"];
  $pass=$_POST["password"];
  $level=$_POST["level"];
  if($level=="customer"){
    $tabel="td_login";
  }else{
    $tabel="td_admin";}
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
        window.location.href='/lisatourwebr/user/index.php'</script>
        exit;
        <?php

      }else{
        ?>
        <script>alert ("Selamat Datang 'Admin'")
      window.location.href='index_admin.php'</script>
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



<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="index.html">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" class="input">
           		   </div>
           		</div>
               <input value="customer"  name="level" type="hidden" class="input">
               
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>

           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
            	<a href="/lisatourwebr/daftar.php">Forgot Password?</a>
            	<input value="Login"  class="btn"  type="submit" name="submit_login">
            </form>
        </div>
    </div>t
    <scrip type="text/javascript" src="js/main.js"></script>
</body>
</html>



 