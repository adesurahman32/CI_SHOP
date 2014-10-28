<?php

    include "top.php";
    include "config.php";
?> 

<hr>
   <h2 align="center">DATA PENGUNJUNG</h2>
<hr>
<table class="table table-bordered"    width="100%" >
  <tr>
    <td align="center" bgcolor="#3399FF"><strong>No</strong></td>
    <td align="center" bgcolor="#3399FF"><strong>Nama Pelanggan</strong></td>
    <td align="center" bgcolor="#3399FF"><strong>Provinsi</strong></td>
    <td align="center" bgcolor="#3399FF"><strong>Kota</strong></td>
    <td align="center" bgcolor="#3399FF"><strong>Alamat</strong></td>
    <td align="center" bgcolor="#3399FF"><strong>Telpon</strong></td>
    <td align="center" bgcolor="#3399FF"><strong>Email</strong></td>
    <td align="center" bgcolor="#3399FF"><strong>Status</strong></td>
  </tr>
       <?php
             $sql = "SELECT * FROM tbl_akun ORDER BY nama";
			 $res = mysql_query($sql);
			 
			 $i = 1;
			 while($data=mysql_fetch_array($res))
			 {
  
        ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $data['Nama']; ?></td>
    <td><?php echo $data['Provinsi']; ?></td>
    <td><?php echo $data['Kota']; ?></td>
    <td><?php echo $data['Alamat']; ?></td>
    <td><?php echo $data['Telpon']; ?></td>
    <td><?php echo $data['Email']; ?></td>
    <td><?php echo $data['Status']; ?></td>
  </tr>
  <?php
   $i++;
	}
  
  ?>
</table>
<?php

    include "bottom.php";

?> 