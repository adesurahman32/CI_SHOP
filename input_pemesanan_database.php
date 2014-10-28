<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include"admin/config.php";


// Get values from form 
$kode =  $_POST['kode'];
$nama =  $_POST['nama'];
$jumlah =  $_POST['jumlah'];
$total =  $_POST['total'];
$email =  $_POST['email'];
$resi =  $_POST['resi'];
$atas =  $_POST['atas'];
$nama_pemesan =  $_POST['nama_pemesan'];

if($atas == '' || $resi == '')
{
  ?>
     <script language="javascript">
	    alert("Masih Ada Data Kosong");
		document.location.href="input_pemesanan.php";
	 </script>     
     
  <?php  	
}
else
{
// Insert data into mysql 
$sql="INSERT INTO tbl_pemesanan(tgl_pemesanan,kode_produk,email,jumlah,total,no_resi,atas_nama,nama,nama_pemesan) VALUES(NOW(), '$kode','$email','$jumlah','$total','$resi','$atas','$nama','$nama_pemesan')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
?>
    <script language=javascript>
	 alert("Berhasil");
     document.location.href="pemberitahuan.php";
    </script> 
<?php
}
else {
//echo "ERROR INPUT DATA!!";
?>
    <script language=javascript>
	 alert("Kegagalan Sistem, silahkan coba lagi");
     document.location.href="input_pemesananan.php";
    </script>

<?php
}
// close connection 
mysql_close();

}
?>