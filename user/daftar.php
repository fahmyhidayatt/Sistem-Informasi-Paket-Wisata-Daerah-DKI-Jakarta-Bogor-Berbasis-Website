<?php

$koneksi = new mysqli ("localhost","root","","pariwisata");

?>

<title>Form Pendaftaran</title>
  <div align='center'>
    <form action="prosesdaftar.php" method="post">
    <table>
    <tbody>
    <tr> 
      <td colspan="2" align="center">
        <h1>Daftar Baru</h1>
      </td>
    </tr>    
    <tr>
      <td>Username</td>
      <td> : 
        <input name="username" type="text">
      </td>
    </tr>
    <tr>
      <td>Password</td>
      <td> : 
        <input name="password" type="password">
      </td>
    </tr>
    <tr>
      <td>Email</td>
      <td> : 
        <input name="email" type="text">
      </td>
    </tr>
    <tr>
      <td colspan="2" align="right">
        <input value="Daftar" type="submit">
        <input value="Batal" type="reset">
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">Sudah Punya akun ?<a href="login.php"><b>Login</b></a>
      </td>
    </tr>
      </tbody>
    </table>
  </form>
</div>