<?php
error_reporting(0);
include_once 'koneksi.php';


include_once 'header.php';


?>


			<?php
			 if (!empty($_GET['status']=="ok")) {
                         echo  $pesan =' <script type="text/javascript">

                          alert("Pesan berhasil dikirim !");

                          </script>';
                        }
                        

		?>
		<style type="text/css">
		#gal{
			transition: 1s;
		}
			#gal:hover{

					cursor: pointer;
					/*transform: scale(3.3);
*/


			}

		</style>
	<!-- Banner -->
	<section class="tm-banner">
		<!-- Flexslider -->
		<div class="flexslider flexslider-banner">
		  <ul class="slides">
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title"> Menemukan<span> Tempat </span>Terbaik</h1>
					<p class="tm-banner-subtitle">Untuk Liburan Anda</p>
					<a href="#more" class="tm-banner-link">Learn More</a>	
				</div>
				<img src="img/baner1.jpg" alt="Image" />	
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title"> Tujuan<span> Yang </span> Indah</h1>
					<a href="#more" class="tm-banner-link">Learn More</a>	
				</div>
		      <img src="img/baner2.jpg" alt="Image" />
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title"> Bersantai <span> Bersama </span> Keluarga</h1>
					<a href="#more" class="tm-banner-link">Learn More</a>	
				</div>
		      <img src="img/baner3.jpg" alt="Image" />
		    </li>
		  </ul>
		</div>	
	</section>

	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<div class="row">
		

			
	
		<div class="section-margin-top">
			<div class="row">				
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Paket Wisata</h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
				</div>
			</div>
			<div class="row">


				<?php
						include_once 'wisata.php';

			


				?>
				
			</div>
			
	</section>
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; by Ria Naf'anna 2020 </p>
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>     
<script src="js/ui/jquery-ui.js"></script>
  	<script type="text/javascript" src="js/moment.js"></script>							
	<script type="text/javascript" src="js/bootstrap.min.js"></script>					
	<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>	
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script src="js/custom.js"></script>
   	<script type="text/javascript" src="js/templatemo-script.js"></script>
	<script>
			  


		    $('.flexslider').flexslider({
			    controlNav: false
		    });



	</script>
 </body>
 </html>
