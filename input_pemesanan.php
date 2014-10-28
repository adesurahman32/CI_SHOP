<?php


error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include"admin/config.php";


// Get values from form 


$kode  = $_POST['kode'];
$nama  = $_POST['nama'];
$harga = $_POST['harga'];
$jumlah= $_POST['jumlah'];

$total = $harga * $jumlah;

if($kode == ""|| $nama == "" ||$harga == "" ||$jumlah == "" )
{
	?>
       <script>
	     document.location.href="view.php";
	   </script>
    <?
}
else
{

session_start();
   error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
  
include "config.php";
 // Table name 



$email = $_SESSION['email'];
$sql2="SELECT * FROM tbl_akun WHERE Email='$email'";
$result2=mysql_query($sql2);
$rows2=mysql_fetch_array($result2);

$nama_pemesan = $rows2['Nama'];
?>




<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pemesanan</title>

    <!-- bootstrap CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Custom CSS - Include with every page -->
    <link href="css/style.css" rel="stylesheet">
    <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="bt-register-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Pesanan Anda  <br>
                        <hr>
                      Nama : <?php echo $rows2['Nama']; ?> </h3>
                        <h3 class="panel-title">
                       
                          <table class="table table-bordered">
                            <tr>
                              <td align="center" valign="middle">Nama Produk</td>
                              <td align="center" valign="middle">Harga</td>
                              <td align="center" valign="middle">Jumlah</td>
                              </tr>
                            <tr>
                              <td align="center" valign="middle"><?php echo $nama ?></td>
                              <td align="center" valign="middle"><?php echo $harga ?></td>
                              <td align="center" valign="middle"><?php echo $jumlah ?></td>
                              </tr>
                            <tr>
                              <td colspan="3" align="right">Total Rp. <?php echo $total ?></td>
                              
                              </tr>
                           </table>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div align="center">*Input Confirmasi Bank*</div> <br>
                        <form role="form" action="input_pemesanan_database.php" name="form1" method="post">
                            <input name="kode" type="hidden" value="<?php echo $kode ?>">
                            <input name="nama" type="hidden" value="<?php echo $nama ?>">
                            <input name="harga" type="hidden" value="<?php echo $harga ?>">
                            <input name="total" type="hidden" value="<?php echo $total ?>">
                            <input name="jumlah" type="hidden" value="<?php echo $jumlah ?>">
                            <input name="email" type="hidden" value="<?php echo $email ?>">
                            <input name="nama_pemesan" type="hidden" value="<?php echo $nama_pemesan ?>">
                            <div class="form-group">
                                <input class="form-control" placeholder="No Resi Pengiriman" name="resi" type="text"  autofocus>
                            </div> 
                            <div class="form-group">
                                <input class="form-control" placeholder="Atas Nama" name="atas" type="text"  autofocus>
                            </div> 
                            <input type="submit" class="btn btn-primary" value="Konfirmasi" />
                            <input type="reset" class="btn btn-primary" value="Bersih" />
                            <hr />
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
    </script>
</body>

</html>
<?php
}


?>

 