<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="assets/css/style.css" rel="stylesheet" />
    
<script language="JavaScript">
var gAutoPrint = true; // Tells whether to automatically call the print function

function printSpecial()
{
if (document.getElementById != null)
{
var html = '<HTML>\n<HEAD>\n';

if (document.getElementsByTagName != null)
{
var headTags = document.getElementsByTagName("head");
if (headTags.length > 0)
html += headTags[0].innerHTML;
}

html += '\n</HE>\n<BODY>\n';

var printReadyElem = document.getElementById("printReady");

if (printReadyElem != null)
{
html += printReadyElem.innerHTML;
}
else
{
alert("Could not find the printReady function");
return;
}

html += '\n</BO>\n</HT>';

var printWin = window.open("","printSpecial");
printWin.document.open();
printWin.document.write(html);
printWin.document.close();
if (gAutoPrint)
printWin.print();
}
else
{
alert("The print ready feature is only available if you are using an browser. Please update your browswer.");
}
}

</script>
<link href="templatemo_style.css" rel="stylesheet" type="text/css">
<title>E-Shop</title>
</head>
<body>
<p align="center"><a href="javascript:void(printSpecial())"><img src="printer/printerok.png" width="48" height="48" border="0"></a>
<p align="center">
<h1 align="center"> CV. SM FURNITURE AND INTERIOR</h1>
<h2 align="center">Jl. Prajurit 1 No 40 Gg Kimas Calang Tanjung Baru Bandar Lampung </h2>
<h2 align="center">Telp : 0813-790-6007</h2>
<hr />
<p align="center">&nbsp;  </p>

    <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="table table-bordered">
       <tr>
           <td align="center" bgcolor="#3399FF"><strong>No</strong></td>
           <td align="center" bgcolor="#3399FF"><strong>Foto</strong></td>
           <td align="center" bgcolor="#3399FF"><strong>Tanggal</strong></td>
           <td align="center" bgcolor="#3399FF"><strong>Nama Produk</strong></td>
           <td align="center" bgcolor="#3399FF"><strong>Jumlah</strong></td>
           <td align="center" bgcolor="#3399FF"><strong>Total</strong></td>
           <td align="center" bgcolor="#3399FF"><strong>Nama Pemesan</strong></td>
           <td align="center" bgcolor="#3399FF"><strong>No Resi</strong></td>
           <td colspan="2" align="center" bgcolor="#3399FF"><strong>Atas Nama</strong></td>
       </tr>
      
      
	<?php
	$email = $_GET['id'];
       include "config.php";
		$sql  = "SELECT tgl_pemesanan,nama,jumlah,email,tbl_pemesanan.kode_produk,total,nama_pemesan,no_resi,atas_nama,foto FROM tbl_pemesanan,tbl_produk WHERE tbl_pemesanan.kode_produk=tbl_produk.kode_produk and email ='$email' ORDER BY tbl_pemesanan.tgl_pemesanan";
	$rest = mysql_query($sql);
	$i = 1;
	while($data = mysql_fetch_array($rest) )
	{
		
	
	$alamat = $data['foto'];
	 
						?>
                            
      <tr>
         <td align="center"><?php echo $i; ?></td>
           <td align="center"> <img src="admin/<?php echo $alamat?>" width="180", height="166"> </td>
         <td align="center"> <?php echo $data['tgl_pemesanan'];?></td>
         <td align="center"> <?php echo $data['nama'];?></td>
         <td align="center"> <?php echo $data['jumlah'];?></td>
         <td align="center"> <?php echo $data['total'];?></td>
         <td align="center"> <?php echo $data['nama_pemesan'];?></td>
         <td align="center"> <?php echo $data['no_resi'];?></td>
         <td align="center"> <?php echo $data['atas_nama'];?></td>
       </tr>                         
                            <?php
	}
							?>
    </table>     

<h2 align="right"><strong>Pimpinan </strong></h2>
<p align="right">&nbsp;</p>
<h2 align="right"><strong><u>SAMINO</u> </strong></h2>
<p align="right">&nbsp;</p>
<hr />
<p>&nbsp;</p>
</body>
</html>
