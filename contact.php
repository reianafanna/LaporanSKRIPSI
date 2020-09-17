
	<!-- Header -->
<?php

include_once 'header.php';


?>



	<!-- gray bg -->	
			
	
	<!-- white bg -->
	<section class="section-padding-bottom">
		<div id="more" class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Contact Us</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			
			
			
			<div class="row">
			
				<!-- contact form -->
				<form action="con_add.php" method="post" class="tm-contact-form">
					<div class="col-lg-6 col-md-6">
						<div id="google-map">
							<p>
								Brader Bus Holiday Bandung Berlokasi di Jalan Cipedes Tengah No 59 kec Sukajadi Kota Bandung. 
								</p>
								<br>
								<p>Operasional Kantor : </p>
								<br>
							<ul>
									
								<li>Senin – Jum’at : 08.00 wib – 17.00 wib </li>
								<li>Sabtu : 08.00 wib – 14.00 wib </li>
								<li>Tlp/Fax	: (022) 8778-3905</li>
							</ul>
							


						</div>



						<div class="contact-social">
							<a href="#" class="tm-social-icon tm-social-facebook"><i class="fa fa-facebook"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-twitter"><i class="fa fa-twitter"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-instagram"><i class="fa fa-instagram"></i></a>
				      		<a href="#" class="tm-social-icon tm-social-google-plus"><i class="fa fa-google-plus"></i></a>
						</div>
					</div> 
			<center><p>
			Formulir Pertanyaan Kritik Dan Saran
			</p></center>
					<div class="col-lg-6 col-md-6 tm-contact-form-input">
						<div class="form-group">
							<input name="nm" type="text" id="contact_name" class="form-control" placeholder="NAME" />
						</div>
						<div class="form-group">
							<input name="em" type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
						</div>
						<div class="form-group">
							<input name="jud" type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
						</div>
						<div class="form-group">
							<textarea name="isi" id="contact_message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
						</div>
						<div class="form-group">
							<button class="tm-submit-btn" type="submit" name="submit">Kirim</button> 
						</div>               
					</div>
				</form>
			</div>			
		</div>
	</section>
	<footer class="tm-black-bg">
		<div class="container">
			<!-- <div class="row"> -->
				<!-- <p class="tm-copyright-text">Copyright &copy; by Ria Naf'anna 2020 </p> -->
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>			<!-- flexslider js -->
	<script type="text/javascript" src="js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
	<script>
		/* Google map
  //     	------------------------------------------------*/
  //     	var map = '';
  //     	var center;

  //     	function initialize() {
	 //        var mapOptions = {
	 //          	zoom: 14,
	 //          	center: new google.maps.LatLng(37.769725, -122.462154),
	 //          	scrollwheel: false
  //       	};
        
	 //        map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

	 //        google.maps.event.addDomListener(map, 'idle', function() {
	 //          calculateCenter();
	 //        });
        
	 //        google.maps.event.addDomListener(window, 'resize', function() {
	 //          map.setCenter(center);
	 //        });
  //     	}

	 //    function calculateCenter() {
	 //        center = map.getCenter();
	 //    }

	 //    function loadGoogleMap(){
	 //        var script = document.createElement('script');
	 //        script.type = 'text/javascript';
	 //        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
	 //        document.body.appendChild(script);
	 //    }
	
  //     	// DOM is ready
		// $(function() {

		// 	// https://css-tricks.com/snippets/jquery/smooth-scrolling/
		// 	$('a[href*=#]:not([href=#])').click(function() {
		// 		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		// 			var target = $(this.hash);
		// 			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		// 			if (target.length) {
		// 				$('html,body').animate({
		// 					scrollTop: target.offset().top
		// 				}, 1000);
		// 				return false;
		// 			}
		// 		}
		// 	});

		//   	// Flexslider
		//   	$('.flexslider').flexslider({
		//   		controlNav: false,
		//   		directionNav: false
		//   	});

		//   	// Google Map
		//   	loadGoogleMap();
		//   });
	</script>
</body>
</html>
