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
        window.location.href='index.php'</script>
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

 <title>Form Login</title>
 <div align='center'>
  <form method="post">
    <h1>Masuk</h1>
    <table>
      <tbody>
        <tr>
          <td>Username</td>
          <td> : 
            <input name="username" type="text">
          </td>
          <tr>
          <td> 
            <input value="customer" name="level" type="hidden">
          </td>
        </tr>
              <tr>
                <td>Password</td>
                <td> : 
                  <input name="password" type="password">
                </td>
              </tr>
              <tr>
                <td colspan="2" align="right">
                  <input value="Login" type="submit" name="submit_login"> 
                  <input value="Batal" type="reset">
                </td>
              </tr>
              <tr>
                <td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a>
                </td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>