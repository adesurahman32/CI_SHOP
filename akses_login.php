<?php
 session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "admin/config.php";
$email=$_POST['username'];
$password=$_POST['password'];

if($email == '' || $password == '')
{
  ?>
    <script language=javascript>
	alert('masih ada data kosong');
    document.location.href="login.php";
    </script> 
     
  <?php  	
}
else
{
$q = "SELECT * FROM tbl_akun WHERE Email = '$email'";
$result = mysql_query($q);
$data = mysql_fetch_array($result);
//cek kesesuaian password masukan dengan database
if ($password == $data['Password']) {
//menyimpan tipe user dan username dalam session
    
     $_SESSION['email'] = $data['Email'];
	 
if ($data['Status'] == "admin") {

?>
    <script language=javascript>
	alert('Selamat Datang ADMINISTRASI');
    document.location.href="admin/index.php";
    </script> 
<?php
}else{
?>
    <script language=javascript>
	alert('Selamat Datang Pengunjung');
    document.location.href="view.php";
    </script> 


<?php
}
}else{
	?>
    <script language=javascript>
	alert('Kesalahan Username atau Password');
    document.location.href="login.php";
    </script> 


    <?php
}
echo mysql_error();
}
?>