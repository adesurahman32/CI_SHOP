<?php
   include "top.php";
   include "config.php";
   
   $kode_produk = $_GET['id'];
   
   //excute delete
   $sql = "delete from tbl_produk where kode_produk='$kode_produk'";
   
   //jalankan aplikasi
   mysql_query($sql);
   
   //pesan
   ?>
      <script>
	    alert('data berhasil dihapus');
		document.location.href="view_produk.php";
	  </script>
   <?php

    include "bottom.php";
?>