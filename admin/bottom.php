<?php

//session_start();

 if(isset($_SESSION['email'])){ 

?> 

</div>
    </div> 
     <!-- CONTENT-WRAPPER SECTION END-->
<section class="footer-section">
<div class="col-md-4">
                <strong>Setting Promosi </strong>
                <hr>
                <form action="input_promosi.php" method="post" id="tes" name="tes">                   
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea name="bonus" id="bonus" required class="form-control" rows="3" placeholder="Inputkan Promosi"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">UBAH Promosi HOME E-SHOP</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <strong>Lokasi Kami</strong>
                <hr>
                <p>
                     Gg. Perintis 2 ,<br />
                                    Kedaton, Bandar Lampung<br />
                    Call: +62-857-5892-3706<br>
                    Email: info@yourdomain.com<br>
                </p>

                2014 www.yourdomain.com | All Right Reserved
            </div>
        
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
  
</body>
</html>

<?php

 }
 else
 {
	 ?>
     
       <script>
	      alert("Maaf Login Dulu Yah");
		  document.location.href="../login.php";
	   </script>
     
     <?php
 }