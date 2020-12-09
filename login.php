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
        Login Sucsess
        </div>";
        $_SESSION["user"]=$data["username"];
        $_SESSION["pass"]=$data["password"];
        if($level=="customer"){

          ?>


          <script>alert ("Welcome '<?php echo $_SESSION['user']; ?>'")
        window.location.href='user/index.php'</script>
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
  <title>Form Login </title>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"> 
 <style>

    body{
  font-family: sans-serif;
  background:   #F5F5F5;
  color: white;
  margin: 0;
  padding: 0;
}

h1{
  text-align: center;
  /*ketebalan font*/
  font-weight: 300;
}

.tulisan_login{
  text-align: center;
  /*membuat semua huruf menjadi kapital*/
  
  color: white;
  font-family: 'Lobster', cursive;
  font-size: 30px;

}

.kotak_login{
  width: 350px;
  height: 500px;
  background: #000;
top: 50%;
left: 50%;
position: absolute;
transform: translate(-50%,-50%);
box-sizing: border-box;

  margin: 20px auto;
  padding: 30px 20px;
}

.avatar{
  width: 100px;
  height: 100px;
  border-radius: 60%;
  position: absolute;
  top:-50px;
  left: calc(50% - 50px);


}

label{
  font-size: 13pt;
}

.form_login{
  /*membuat lebar form penuh*/
  box-sizing : border-box;
  width: 100%;
  padding: 10px;
  font-size: 11pt;
  margin-bottom: 20px;
}
    .tombol_login{
      background: #46de4b;
      color: white;
      font-size: 11pt;
      width: 50%;
      border: none;
      border-radius: 30px;
      padding: 10px 20px;
      display: block;    }


.link{
  color: white;
  text-decoration: none;
  font-size: 11pt;
}
 </style>
</head>
<body>



 
  <form method="post">
  

    <div class="kotak_login">
      <img src=img/avatar.png class="avatar">
      <br>
      <br>

    <p class="tulisan_login">Login Here</p>
      
      <br>
      <br>
   <form>     
     <i class="fa fa-user"> </i>
       <label>Username</label>
      <input type="text" name="username" class="form_login" placeholder="Username">
            <input value="customer" name="level"  class="form_login"  type="hidden">

<i class="fas fa-lock"></i>  
      <label>Password</label>
      <input type="password" name="password" class="form_login" placeholder="Password ">

               
                <td colspan="2" align="right">
               <center>   <input value="Login" class="tombol_login" type="submit" name="submit_login"> 
                  </center>
                </td>
              </tr>
              <tr>
                <br>
                  <div align='center'>
                <td colspan="2" align="center">Don’t have an account?<a class="link" href="daftar.php"><b> Sign up</b></a>
                </td>
              </tr>
        
        </form>

        
</body>
</html>


