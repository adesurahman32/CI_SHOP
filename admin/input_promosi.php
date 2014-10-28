<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include"config.php";


// Get values from form 
$pesan=  $_POST['bonus'];


if ( $pesan == '')
{
	 ?>
             <script language="javascript">
			     alert('Masih data Kosong');
				 document.location.href="index.php";
			 </script>
          
          <?php
}
else
{

			$sql="UPDATE tbl_promosi SET pesan='$pesan'";
			mysql_query($sql);
			
	 ?>
             <script language="javascript">
			     alert('Setting Berhasil');
				 document.location.href="index.php";
			 </script>
          
          <?php
             
}
?>