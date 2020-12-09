<style type="text/css">
  @font-face {
    font-family: myFirstFont;
    src: url(fonts/ufonts.com_square721-bt-roman.ttf);
  }

  p, u, td{
    font-family: myFirstFont;
  }
</style>
<title>Print Penyewaan Mobil</title>
<body onLoad="window.print()">
<?php
error_reporting(0);
session_start();
include "koneksi.php"; 
include "tglindo.php"; 
$d = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM td_bkml where kdsewa='$_GET[id]'"));
?>
<table border=0 width=100%>
<tr>
    <td align="center" rowspan='3' width='88px'><img src='penyewaan_mobil/logolisa.jpg' width='85px'></td>
</tr> 
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center> Lisa Tour& Travel<br></h3></td>
    <td align="center" rowspan='3' width='88px'>&nbsp;</td>
</tr> 
<tr>
    <td align="center"><p>Jl. Teuku Cik Ditiro No.19, RT.9/RW.2, Gondangdia, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10350 ( Lobby Utama) </p></td>
</tr> 
</table>
<hr style='border:1px solid #000'>

<table width=100%>
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>Rental Car</h3></td>
</tr> 
<tr>
    <td align="center"><p> No: 3690 / 1.858.23<?php echo "$d[id_pas]"; ?> ASITA No: 1074 / VIII / DPP / 2005</p></td>
</tr> 
</table>

<br>


<table width='50%' align="center">
<tr>
<td width="5%">1</td>
<td width="30%">Name</td>
<td width="65%">: <?php echo "$d[username]";?></td>
</tr>

<tr>
<td>2</td>
<td>Address</td>
<td>: <?php echo "$d[alamat]";?></td>
</tr>

<tr>
<td>3</td>
<td>Telephone</td>
<td>: <?php echo "$d[tlp]";?></td>
</tr>

<tr>
<td>4</td>
<td>Email</td>
<td>: <?php echo "$d[email]";?></td>
</tr>


<tr>
<td>5</td>
<td>Nama Car</td>
<td>: <?php echo "$d[namak]";?></td>
</tr>

<tr>
<td>6</td>
<td>Total</td>
<td>: <?php echo "$d[jumlah]";?></td>
</tr>

<tr>
<td>7</td>
<td>Rental Date</td>
<td>: <?php echo "$d[tglsewa]";?></td>
</tr>

<tr>
<td>8</td>
<td>Date Back</td>
<td>: <?php echo "$d[tglkembali]";?></td>
</tr>

<tr>
<td>9</td>
<td>Information</td>
<td>: <?php echo "$d[keterangan]";?></td>
</tr>

</table>
<br> 
</br>

<table width=100%>
  <tr>
    <td width="30%">
    </td>

    <td width="30%">

    </td>

    <td >
       
        <table>
            
            <tr>
              <td>Jakarta,</td>
              <td> <?php echo date("d M Y"); ?></td></tr>
        </table><br>
        <center>
          Lisa Tour& Travel<br>Owner<br><br><br>

          <u>Khalil Ayesh Khalil</u><br>
         
          NIP. 2222222
        </center>
    </td>
  </tr>
</table> 
</body>