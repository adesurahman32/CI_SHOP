<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Input Data Produk</title>

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
                        <h3 class="panel-title">Data Produk Edit</h3>
                    </div>
                    <div class="panel-body">
                    <?php
					include "config.php";
					$kode_produk = $_GET['id'];
					
					$sql = mysql_query("select * from tbl_produk where kode_produk = '$kode_produk'");
  
                    $data=mysql_fetch_array($sql);
					?>
                      <form role="form" action="input_produk_edit.php" name="form1" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input name="kode" type="text" autofocus class="form-control" placeholder="Kode Produk " value="<?php echo $data['kode_produk']; ?>" readonly>
                          </div>                            
                            <div class="form-group">
                                <input class="form-control" placeholder="Nama Produk " name="nama" type="text"  value="<?php echo $data['nama_produk']; ?>" autofocus>
                            </div>
                            <div class="form-group">
                            <select name="kategori" class="form-control">
         <option value="furniture">Furniture</option>
         <option value="interior">Interior</option>
        
  </select>             
                            </div>
                          
                            <div class="form-group">
                                <input class="form-control" placeholder="Harga " name="harga"  value="<?php echo $data['harga']; ?>"type="text" autofocus>
                            </div>
                             <div class="form-group">
                                <input class="form-control" placeholder="Ukuran " name="ukuran" type="text"  value="<?php echo $data['ukuran']; ?>" autofocus>
                            </div>
                             <div class="form-group">
                                <input class="form-control" placeholder="Warna " name="warna"  value="<?php echo $data['warna']; ?>" type="text" autofocus>
                            </div>
                             <div class="form-group">
                                <input name="nama_file" type="file" id="nama_file" size="30" value="<?php echo $data['foto']; ?>" />
                            </div>
                           <div class="form-group">
                                <input class="form-control" placeholder="Keterangan " name="keterangan"  value="<?php echo $data['keterangan']; ?>" type="text" autofocus>
                            </div> 
                            
                            
                           
                            <input type="submit" class="btn btn-primary" value="Edit Data" />
                            <input type="reset" class="btn btn-primary" value="Batal" />
                            <hr />
                            
                            <hr />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
