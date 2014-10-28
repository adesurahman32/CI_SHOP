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
                        <h3 class="panel-title">Data Produk Baru</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="input_produk.php" name="form1" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input class="form-control" placeholder="Kode Produk " name="kode" type="text" autofocus>
                            </div>                            
                            <div class="form-group">
                                <input class="form-control" placeholder="Nama Produk " name="nama" type="text" autofocus>
                            </div>
                            <div class="form-group">
                            <select name="kategori" class="form-control">
         <option value="furniture">Furniture</option>
         <option value="interior">Interior</option>
        
  </select>             
                            </div>
                          
                            <div class="form-group">
                                <input class="form-control" placeholder="Harga " name="harga" type="text" autofocus>
                            </div>
                             <div class="form-group">
                                <input class="form-control" placeholder="Ukuran " name="ukuran" type="text" autofocus>
                            </div>
                             <div class="form-group">
                                <input class="form-control" placeholder="Warna " name="warna" type="text" autofocus>
                            </div>
                             <div class="form-group">
                                <input name="nama_file" type="file" id="nama_file" size="30" />
                            </div>
                           <div class="form-group">
                                <input class="form-control" placeholder="Keterangan " name="keterangan" type="text" autofocus>
                            </div> 
                            
                            
                           
                            <input type="submit" class="btn btn-primary" value="Input Data" />
                            <input type="reset" class="btn btn-primary" value="Bersih" />
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
