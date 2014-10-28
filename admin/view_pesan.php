<?php

    include "top.php";
    include "config.php";
?> 

<hr>
   <h2 align="center">Data Pesan Singkat</h2>
<hr>
<table class="table table-bordered"    width="100%" >
  <tr>
    <td align="center" bgcolor="#3399FF"><strong>No</strong></td>
    <td align="center" bgcolor="#3399FF"><strong>Nama Pengirim</strong></td>
    <td align="center" bgcolor="#3399FF"><strong>Email</strong></td>
    <td align="center" bgcolor="#3399FF"><strong>Pesan</strong></td>
   
  </tr>
       <?php
             $sql = "SELECT * FROM tbl_pesan ORDER BY nama";
			 $res = mysql_query($sql);
			 
			 $i = 1;
			 while($data=mysql_fetch_array($res))
			 {
  
        ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['pesan']; ?></td>
   
  </tr>
  <?php
   $i++;
	}
  
  ?>
</table>
<?php

    include "bottom.php";

?> 