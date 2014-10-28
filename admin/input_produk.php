<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include"config.php";
$namafolder="gambar/";

// Get values from form 
$kode =  $_POST['kode'];
$nama =  $_POST['nama'];
$kategori =  $_POST['kategori'];
$harga =  $_POST['harga'];
$ukuran =  $_POST['ukuran'];
$warna =  $_POST['warna'];
$keterangan =  $_POST['keterangan'];

if ( $kode == '' || $nama == '' || $kategori == ''|| $harga == ''|| $ukuran == ''|| $warna == ''|| $keterangan == '')
{
	 ?>
             <script language="javascript">
			     alert('Masih data Kosong');
				 document.location.href="produk.php";
			 </script>
          
          <?php
}
else
{
//jika kosong
if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	  //memilih jenis gambar
      $jenis_gambar=$_FILES['nama_file']['type'];
	  //aksi memilih
      if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
	{
		//inisialisasi
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		//memindahkan gambar
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			$sql="insert into tbl_produk(kode_produk,nama_produk,kategori,harga,ukuran,warna,foto,keterangan) values ('$kode','$nama','$kategori','$harga','$ukuran','$warna','$gambar','$keterangan')";
			mysql_query($sql);
			?>
             <script language="javascript">
			     alert('Berhasil Menambah Produk');
				 document.location.href="index.php";
			 </script>
          
          <?php
		} else {
		  
		  ?>
             <script language="javascript">
			     alert('gagal mengirkan gambar');
				 document.location.href="produk.php";
			 </script>
          
          <?php
		  
		  
		  
		}
   } else {
	    ?>
             <script language="javascript">
			     alert('Jenis gambar yang anda kirim salah. Harus .jpg .gif .png');
				 document.location.href="produk.php";
			 </script>
          
          <?php
		
   }
} else {
	 ?>
             <script language="javascript">
			     alert('Anda Belum Memilih Gambar Produk');
				 document.location.href="produk.php";
			 </script>
          
          <?php
}
}
?>