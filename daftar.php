<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pendaftaran</title>

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
                        <h3 class="panel-title">Silahkan Inputkan Data Pribadi Anda</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="input_daftar.php" name="form1" method="post">
                            <div class="form-group">
                                <input class="form-control" placeholder="Nama Anda " name="nama" type="text" autofocus>
                            </div>
                            <div class="form-group">
                            <select name="provinsi" class="form-control">
         <option value="Lampung">Lampung</option>
         <option value="Jakarta">Jakarta</option>
         <option value="Palembang">Palembang</option>
         <option value="Bandung">Bandung</option>
         <option value="Surabaya">Surabaya</option>
         <option value="Jogja">Jogja</option>
         <option value="Medan">Medan</option>
  </select>                           
                            
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Kota Anda " name="kota" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Alamat Anda " name="alamat" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="No Telpon Anda " name="telpon" type="text" autofocus>
                            </div>
                            
                            <div class="form-group">
                                <input class="form-control" placeholder="Email Anda" name="email" type="email" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Retype Password" name="repassword" type="password" value="">
                            </div>
                            
                           
                            <input type="submit" class="btn btn-primary" value="Daftarkan" />
                            <input type="reset" class="btn btn-primary" value="Bersih" />
                            <hr />
                            <div class="form-group">
                                Sudah Punya Akun ? <a href="login.php">Klik Disini</a>
                            </div>
                            <hr />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
