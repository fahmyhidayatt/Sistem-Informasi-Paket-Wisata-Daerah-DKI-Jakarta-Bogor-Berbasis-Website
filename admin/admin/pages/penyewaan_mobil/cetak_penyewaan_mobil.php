        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                        <!-- /.panel-heading -->
                        <div class="panel-body">

<body onload="window.print ()">


<tr><td colspan=8 color="#FFF000"><center>Lisa Tour& Travel</center></td></tr>
<tr><td colspan=8 color="#FFF000"><center>DKI Jakarta</center></td></tr>
<tr><td colspan=8 ><center>Jl. Teuku Cik Ditiro No.19, RT.9/RW.2, Gondangdia, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10350 ( Lobby Utama)
</center></td></tr>
<tr><td colspan=8 ><center>Penyewaan Mobil</center></td></tr>
<tr><td colspan=8 ><center>=======================================================</center></td></tr>

<table width="100%" border="1" cellpadding="10" cellspacing="0">
<tr bgcolor='#f2a91c'> 
<th>No</th> 
<td>Nama</td>
<td>Alamat</td>
<td>Telfon</td>
<td>Email</td>
<td>Nama Kendaraan</td>
<td>Jumlah</td>
<td>Tanggal Sewa</td>
<td>Tanggal Kembali</td>
<td>Keterangan</td>

</tr>

<?php
include"koneksi.php";
include"tglindo.php";
$sql = mysqli_query($koneksi, "SELECT * from td_bkml");
$no=1;
while($row = mysqli_fetch_array($sql)){
?>
<tr bgcolor='#FFF'>
<td align='center'> <?php echo $no; ?> </td>
<td align='left'> <?php echo $row['username']; ?></td>
<td align='left'> <?php echo $row['alamat']; ?> </td>
<td align='left'> <?php echo $row['tlp']; ?> </td>
<td align='left'> <?php echo $row['email']; ?> </td>
<td align='left'> <?php echo $row['namak']; ?> </td>
<td align='left'> <?php echo $row['jumlah']; ?>  </td>
<td align='left'> <?php echo $row['tglsewa']; ?> </td>
<td align='left'> <?php echo $row['tglkembali']; ?>  </td>
td align='left'> <?php echo $row['keterangan']; ?>  </td>
</tr>
<?php
$no++;
}
?>
</table>
<br>
<br>
<table>
<td>
<tr>Jakarta,<?php echo date('d - M - Y'); ?></tr><br>
<tr>        Ttd         </tr><br>
<tr>                    </tr><br>
<tr>                    </tr><br>
<tr>                    </tr><br>
<tr>     Khalil Ayesh Khalil </tr>
</td>
</table>

</div>
</div>
</div>
</div>