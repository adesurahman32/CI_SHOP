<?php
session_start();
   error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
  
include "config.php";
 // Table name 

// get value of id that sent from address bar
$id=$_GET['id'];
$email = $_SESSION['email'];

// Retrieve data from database 
$sql="SELECT * FROM tbl_produk WHERE kode_produk='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

$sql2="SELECT * FROM tbl_akun WHERE Email='$email'";
$result2=mysql_query($sql2);
$rows2=mysql_fetch_array($result2);

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
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="bt-register-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Silahkan Inputkan Data Pesanan Anda  <br>
                        <hr>
                        <div align="center">*Data Diri Anda*</div> <br>
                        Nama : <?php echo $rows2['Nama']; ?> <br>
                        Telp : <?php echo $rows2['Telpon']; ?> <br>
                          Alamat : <?php echo $rows2['Alamat']; ?> <br>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div align="center">*Data Produk Pesanan*</div> <br><b>Tanggal : <?php echo date('d/m/y')?></b>
                        <form role="form" action="input_pemesanan.php" name="form1" method="post">
                            <div class="form-group">
                                <input class="form-control" placeholder="" name="kode" type="text" value="<?php echo $rows['kode_produk']; ?>" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="" name="nama" type="text" value="<?php echo $rows['nama_produk']; ?>" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="" name="harga" type="text" value="<?php echo $rows['harga']; ?>" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Jumlah Pesanan" name="jumlah" type="text"  autofocus>
                            </div> 
                            <input type="submit" class="btn btn-primary" value="Pesan Produk" />
                            <input type="reset" class="btn btn-primary" value="Bersih" />
                            <hr />
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
