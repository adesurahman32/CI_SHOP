<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Pengunjung</title>

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
                <div class="bt-login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Silahkan Login Dibawah Ini</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="akses_login.php" method="post" name="form1">                            
                                <div class="form-group">
                                    <input class="form-control" placeholder="Input Email Anda " name="username" type="email" autofocus>
                                </div>
                           
                              
                            <div class="form-group">
                                    <input class="form-control" placeholder="Password Anda" name="password" type="text" value="">
                                </div>
                           
                           
                                  <input type="submit"  class="btn btn-success" value="Login User" /> 
                                  <input type="reset"  class="btn btn-success" value="Ulangi" />                           

                            <hr />
                             <div class="form-group">
                                  <p>Tidak Punya Akun ? <a href="daftar.php" >Klik Disini</a></p>
                                  
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
