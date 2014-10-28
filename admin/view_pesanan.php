<?php
    include "top.php";
   
    include "config.php";
	?>
    
<hr>
   <h2 align="center">Data Pesanan</h2>
<hr>    
    
    
    <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="table table-bordered">
       <tr>
           <td align="center" bgcolor="#3399FF"><strong>No</strong></td>
           <td align="center" bgcolor="#3399FF"><strong>Tanggal</strong></td>
           <td align="center" bgcolor="#3399FF"><strong>Nama Produk</strong></td>
           <td align="center" bgcolor="#3399FF"><strong>Jumlah</strong></td>
           <td align="center" bgcolor="#3399FF"><strong>Total</strong></td>
           <td align="center" bgcolor="#3399FF"><strong>Nama Pemesan</strong></td>
           <td align="center" bgcolor="#3399FF"><strong>No Resi</strong></td>
           <td colspan="2" align="center" bgcolor="#3399FF"><strong>Atas Nama</strong></td>
       </tr>
      
      
	<?php

		$sql  = "SELECT * FROM tbl_pemesanan ORDER BY tgl_pemesanan";
	$rest = mysql_query($sql);
	$i = 1;
	while($data = mysql_fetch_array($rest) )
	{
	 
						?>
                            
      <tr>
         <td align="center"><?php echo $i; ?></td>
         <td align="center"> <?php echo $data['tgl_pemesanan'];?></td>
         <td align="center"> <?php echo $data['nama'];?></td>
         <td align="center"> <?php echo $data['jumlah'];?></td>
         <td align="center"> <?php echo $data['total'];?></td>
         <td align="center"> <?php echo $data['nama_pemesan'];?></td>
         <td align="center"> <?php echo $data['no_resi'];?></td>
         <td align="center"> <?php echo $data['atas_nama'];?></td>
       </tr>                         
                            <?php
	}
							?>
    </table>          

                        
         
<hr>              
<?php
	
    include "bottom.php";
?>