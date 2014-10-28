<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include"config.php";


// Get values from form 
$nama=  $_POST['nama'];
$email=  $_POST['email'];
$pesan=  $_POST['pesan'];



			$sql="INSERT INTO tbl_pesan values('$nama','$email','$pesan')";
			mysql_query($sql);
			
	 ?>
             <script language="javascript">
			     alert('Kami Akan Proses Pertanyaan Anda');
				 document.location.href="index.php";
			 </script>
          
          <?php
             

?>