<?php

    include "top.php";  
   
 


?>


<hr>
<h3 align="center">Produk Keseluruhan</h3>
<table width="100%" cellspacing="0" cellpadding="0" class="table table-bordered ">  
  <?php
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
         $cari = $_POST['cari'];

						$sql  = "SELECT * from tbl_produk where nama_produk like '%$cari%';";
	$rest = mysql_query($sql);
	
	while($data = mysql_fetch_array($rest) )
	{
	
	$alamat = $data['foto'];
	 
						?>
                            
  <tr>       
         
    <td align="center">
         <h3 align="center"> <?php echo $data['nama_produk'];?></h3><br>
         <img src="admin/<?php echo $alamat?>" width="210", height="210"></td>
         <td align="center" valign="middle">       
         <b>Ukuran :</b> <?php echo $data['ukuran'];?> <br>
		 <b>Warna  : </b><?php echo $data['warna'];?><br>
         <b>Detail :</b> <?php echo $data['keterangan'];?>
         
         
         </td>     
         <td align="center" valign="middle">  <?php echo $data['harga'];?>
         <br>
      <?php
session_start();

 if(isset($_SESSION['email'])){ 

?>
         <a href=pemesanan.php?id=<?php echo $data['kode_produk']?>> <button class='btn btn-danger'><span class='glyphicon glyphicon-camera'> </span> Pesan</button></a>
  <?php
   }//ini tutup if
   else
   {
	   ?>
	    <a href="login.php"> <button class='btn btn-danger'><span class='glyphicon glyphicon-camera'> </span> Login Untuk Memesan</button></a>
	   <?php
   }

?>       
         
         
         </td>
         <?php
	}
		 ?>
</table>
<?php
    include "bottom.php";
	
?>
   