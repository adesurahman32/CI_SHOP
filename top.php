
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>E-SHOP</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="assets/css/style.css" rel="stylesheet" />
    
    
    
    
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><strong>E-SHOP</strong> Furniture</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                    <script type="text/javascript">
function popcbox() {
  cboxwin = window.open("","Cbox","width=200,height=380,toolbar=no,scrollbars=no,status=no,resizable=yes");
  cboxwin.document.write('<html><head><title>Cbox</title></head><frameset rows="*,75" frameborder="0" framespacing="0">');
cboxwin.document.write('<frame marginwidth="2" marginheight="2" src="http://www3.cbox.ws/box/?boxid=3405484&amp;boxtag=kbr9ty&amp;sec=main" noresize="true" scrolling="auto" name="cboxmain3-3405484" style="border:#ababab 1px solid;"/>');
cboxwin.document.write('<frame marginwidth="2" marginheight="2" src="http://www3.cbox.ws/box/?boxid=3405484&amp;boxtag=kbr9ty&amp;sec=form" noresize="true" scrolling="no" name="cboxform3-3405484" style="border:#ababab 1px solid;border-top:0px"/>');
  cboxwin.document.write('</frameset>');
  cboxwin.document.write('<noframes>Cbox needs frames!</noframes></html>');
  try {
    x = screen.width;
    y = screen.height;
    cboxwin.moveTo(Math.max((x/2)-100, 0), Math.max((y/3)-190));
  } catch (e) {};
}
</script>


<li><a href="JavaScript:popcbox();">Tempat Chat</a> </li>  
                    <?php
session_start();

 if(isset($_SESSION['email'])){ 

?> 
         <li><a href="data_pesanan.php">Data Pesananan</a></li>
         <li><a href="logout.php">Log Out</a></li>
  <?php
   }//ini tutup if
   else
   {
	   ?>
	     <li><a href="login.php">Login</a></li>
	   <?php
   }

?>      
                   
                   

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tentang <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><strong>No Telpon: </strong>+62-85-7589-1189</a></li>
                            <li><a href="#"><strong>Mail: </strong>info@yourdomain.com</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><strong>Alamat: </strong>
                                <div>
                                   Gg. Perintis 2,<br />
                                    Kedaton, Bandar Lampung
                                </div>
                            </a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" role="search" action="view.php" method="post" name="aaa">
                    <div class="form-group">
                        <input type="text" placeholder="Pencarian" class="form-control" name="cari">
                    </div>
                    &nbsp; 
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="well well-lg offer-box text-center">
<?php
			 //untuk tampilan kanan atas
						 include "config.php";
						$a  = "SELECT * FROM tbl_promosi ";
	$b = mysql_query($a);
	$c = mysql_fetch_array($b);
                echo $c['pesan'];       
                  ?>   
              
               
                </div>
                <div class="main box-border">
                    <div id="mi-slider" class="mi-slider">
                        <ul>
                        <?php
						 include "config.php";
						$sql  = "SELECT * FROM tbl_produk WHERE kategori='furniture' ORDER BY kode_produk limit 4";
	$rest = mysql_query($sql);

	while($data = mysql_fetch_array($rest) )
	{
	
	$alamat = $data['foto'];
	 
						?>
                            <li>
                              *<?php echo $data['nama_produk'];?>*
                             <img src="admin/<?php echo $alamat?>" width="200", height="166"> 
                             Sangat Murah <br>        
                           Rp. <?php echo $data['harga'];?>*
                            
                            </li>
                            <?php
	}
							?>
                        </ul>
                        <ul>
                        <?php
						 include "config.php";
						$sql  = "SELECT * FROM tbl_produk WHERE kategori='interior' ORDER BY kode_produk limit 4";
	$rest = mysql_query($sql);

	while($data = mysql_fetch_array($rest) )
	{
	
	$alamat = $data['foto'];
	 
						?>
                            <li>
                              *<?php echo $data['nama_produk'];?>*
                             <img src="admin/<?php echo $alamat?>" width="200", height="166"> 
                             Sangat Murah <br>        
                           Rp. <?php echo $data['harga'];?>*
                            
                            </li>
                            <?php
	}
							?>
                        </ul>
                        
                        <nav>
                            <a href="#">Furniture</a>
                            <a href="#">Interior</a>
                            
                        </nav>
                    </div>
                    
                </div>
                <br />
            </div>
            <!-- /.col -->
             <?php
			 //untuk tampilan kanan atas
						 include "config.php";
						$sql  = "SELECT * FROM tbl_produk WHERE kategori='interior' ORDER BY kode_produk";
	$rest = mysql_query($sql);
	$data = mysql_fetch_array($rest);	
	
	$alamat = $data['foto'];
	//untuk line k 2
	$sql2  = "SELECT * FROM tbl_produk WHERE kategori='furniture' ORDER BY kode_produk";
	$rest2 = mysql_query($sql2);
	$data2 = mysql_fetch_array($rest2);	
	
	$alamat2 = $data2['foto'];
	?>
            <div class="col-md-3 text-center">
                <div class=" col-md-12 col-sm-6 col-xs-6" >
                    <div class="offer-text">
                   
                         <?php echo $data['nama_produk'];?>
                    </div>
                    <div class="thumbnail product-box">
                         <img src="admin/<?php echo $alamat?>" width="166", height="166"> 
                        <div class="caption">
                            <h3><?php echo $data['nama_produk'];?></h3>
                            <p><a href="#"><?php echo $data['keterangan'];?><a></p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-12 col-sm-6 col-xs-6">
                    <div class="offer-text2">
                       <?php echo $data2['nama_produk'];?>
                    </div>
                   <div class="thumbnail product-box">
                        <img src="admin/<?php echo $alamat2?>" width="166", height="166"> 
                        <div class="caption">
                            <h3><?php echo $data2['nama_produk'];?></h3>
                            <p><a href="#"><?php echo $data2['keterangan'];?><a></p>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
   