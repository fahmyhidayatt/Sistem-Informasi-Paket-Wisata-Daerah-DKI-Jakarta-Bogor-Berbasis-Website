<?php

$koneksi = new mysqli ("localhost","root","","pariwisata");

?>

<!DOCTYPE html>
<html>
<head>
  


<title>Form Register</title>
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
  height: 550px;
  background: #000;
top: 50%;
left: 50%;
position: absolute;
transform: translate(-50%,-50%);
box-sizing: border-box;

  margin: 20px auto;
  padding: 30px 20px;
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

      border: none;
      border-radius: 30px;
      padding: 10px 20px;
      display: block;   
       }

.link{
  color: white;
  text-decoration: none;
  font-size: 11pt;

</style>
</head>
<body>
 
    <form action="prosesdaftar.php" method="post">
    
    
      <div class="kotak_login">
         <p class="tulisan_login">Register Here !</p>
    <form>
      <i class="fa fa-user"> </i>
      <label>Username</label>
        <input name="username" class="form_login" type="text" placeholder="Username">
    
     <i class="fas fa-lock"></i>  
      <label>Password</label>
        <input name="password" class="form_login" type="password" placeholder="Password">
     

     <i class="fas fa-envelope-open-text"></i>
      <label>Email</label>
        <input name="email"  class="form_login" type="text" placeholder="Email">
  
      <td colspan="2" align="right">
      <center> 
       <input value="Register" class="tombol_login" type="submit">
     <br>
        <input value="Cancel"  class="tombol_login" type="reset">
         </center>
      
      <br>
      <br>
 <div align='center'>
      <td colspan="2" align="center">Already have an account ?<a class="link" href="login.php"><b> Login </b></a>
  
  </form>
</td></td></form></div></form></div>  

</body>
</html>



    