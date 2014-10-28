<?php
   //include configurasi
   include "config.php";
   include "top.php"; 
  $kode_produk = $_GET['id'];
  $sql = mysql_query("select * from tbl_produk where kode_produk = '$kode_produk'");
  
  while($data=mysql_fetch_array($sql))
  {  
    
	
   ?>
     <h1>apakah Produk : " <?php echo $data['nama_produk'];?> " akan dikapus??</h1>
	 
<a href=hapusproduk.php?id=<?php echo $data['kode_produk']?>>Hapus</a>
<a href="view_produk.php"> || Tidak</a>     
   
   <?php
   }
   include "bottom.php";
?>