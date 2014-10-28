<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include"admin/config.php";


// Get values from form 
$nama =  $_POST['nama'];
$provinsi =  $_POST['provinsi'];
$kota =  $_POST['kota'];
$alamat =  $_POST['alamat'];
$notlp =  $_POST['telpon'];
$email =  $_POST['email'];
$pass =  $_POST['password'];
$conf =  $_POST['repassword'];
$status = "Pengguna";


if($nama == '' || $alamat == '' || $pass == '' ||$conf == '')
{
  ?>
     <script language="javascript">
	    alert("Masih Ada Data Kosong");
		document.location.href="daftar.php";
	 </script>     
     
  <?php  	
}
else if( $pass != $conf)
{
  ?>
     <script language="javascript">
	    alert("Password dan Confirm Tidak sama");
		document.location.href="daftar.php";
	 </script>     
     
  <?php  	
}
else
{
// Insert data into mysql 
$sql="INSERT INTO tbl_akun(Nama,Provinsi,Kota,Alamat,Telpon,Email,Password,Status) VALUES('$nama', '$provinsi','$kota','$alamat','$notlp','$email','$pass','$status')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
?>
    <script language=javascript>
	 alert("Berhasil. Silahkan anda Login");
     document.location.href="login.php";
    </script> 
<?php
}
else {
//echo "ERROR INPUT DATA!!";
?>
    <script language=javascript>
	 alert("Kegagalan Sistem, silahkan coba lagi");
     document.location.href="daftar.php";
    </script>

<?php
}
// close connection 
mysql_close();

}
?>