<?php
    include "top.php";
   
    include "config.php";
	?>
    
<hr>
   <h2 align="center">Data Produk</h2>
<hr>    
    
    
    <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="table table-bordered">
       <tr>
           <td align="center" bgcolor="#3399FF"><strong>No</strong></td>
           <td align="center" bgcolor="#3399FF"><strong>Nama Produk</strong></td>
           <td align="center" bgcolor="#3399FF"><strong>Harga</strong></td>
           <td align="center" bgcolor="#3399FF"><strong>Kategori</strong></td>
           <td align="center" bgcolor="#3399FF"><strong>Foto Produk</strong></td>
           <td align="center" bgcolor="#3399FF"><strong>Keterangan</strong></td>
           <td colspan="2" align="center" bgcolor="#3399FF"><strong>Aksi</strong></td>
       </tr>
      
      
	<?php

						$sql  = "SELECT * FROM tbl_produk ORDER BY kode_produk";
	$rest = mysql_query($sql);
	$i = 1;
	while($data = mysql_fetch_array($rest) )
	{
	
	$alamat = $data['foto'];
	 
						?>
                            
      <tr>
         <td align="center"><?php echo $i; ?></td>
         <td align="center"> <?php echo $data['nama_produk'];?></td>
         <td align="center">Rp. <?php echo $data['harga'];?></td>
         <td align="center"> <?php echo $data['kategori'];?></td>
         <td align="center"> <img src="<?php echo $alamat?>" width="180", height="166"> </td>
         <td align="center"> <?php echo $data['keterangan'];?></td>
        
         <td align="center"><a href=confirm.php?id=<?php echo $data['kode_produk']?>>|Hapus|</a>
           <br />
         <a href=edit.php?id=<?php echo $data['kode_produk']?>>|Edit| </a>
         
         </td>
         
       </tr>                         
                            <?php
	}
							?>
    </table>          

                        
         
<hr>              
<?php
	
    include "bottom.php";
?>