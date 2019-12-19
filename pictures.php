<!DOCTYPE html>
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120735202-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120735202-3');
</script>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Garretson Wedding</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <link rel="stylesheet" href="css/fancybox.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<!--===============================================================================================-->
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!--===============================================================================================-->


</head>

<body>

	<div class="fh5co-loader"></div>

	<div id="page">
		<div id="fh5co-couple">
			<div class="container">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<h2>Images</h2>
						<p><a href="index.html" class="btn btn-default btn-sm">Home</a></p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
            <p class="imglist">
				<h3 style="float: left;">Photographer Photos <span class="smallText">Click on image to see full resolution! (Mobile version under contruction)</span></h3>
				<!-- <button style="float: right;" type="button" onclick="downloadAll()" class="btn btn-success">Download All</button> -->
				<br>
				<hr>
				<section id="photos">
					<?php 
						$d = 'professional/';
						foreach(glob($d.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file){
							echo "<a href=\"{$file}\" data-fancybox=\"images\">";
							echo "<img style=\"padding: 10px; float: left; \" width=\"240px\" src=\"{$file}\" />";
							echo "</a>";
						}
					?>
				</section>
            </p>
		</div>
        
		<div class="container">
            <p class="imglist">
				<h3 style="float: left;">Gallery <span class="smallText">Click on image to see full resolution! (Mobile version under contruction)</span></h3>
				<!-- <button style="float: right;" type="button" onclick="downloadAll()" class="btn btn-success">Download All</button> -->
				<br>
				<hr>
				<section id="photos">
					<?php 
						$d = 'photos/';
						foreach(glob($d.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file){
							echo "<a href=\"{$file}\" data-fancybox=\"images\">";
							echo "<img style=\"padding: 10px; float: left; \" width=\"240px\" src=\"{$file}\" />";
							echo "</a>";
						}
					?>
				</section>
            </p>
		</div>

		<div class="container">
            <p class="imglist">
				<h3 style="float: left;">Uploaded Photos <span class="smallText">Click on image to see full resolution! (Mobile version under contruction)</span></h3>
				<!-- <button style="float: right;" type="button" onclick="downloadAll()" class="btn btn-success">Download All</button> -->
				<br>
				<hr>
				<section id="uploaded">
					<?php 
						$d = 'customPhotos/';
						foreach(glob($d.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file){
							echo "<a href=\"{$file}\" data-fancybox=\"uploaded\">";
							echo "<img style=\"padding: 10px; float: left; \" width=\"240px\" src=\"{$file}\" />";
							echo "</a>";
						}
					?>
				</section>
            </p>
		</div>

		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">

				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">Created by Adam Chlebek</small>
						</p>
						<p>
							<ul class="fh5co-social-icons">
								<li><a href="https://www.github.com/adamchlebek"><i class="icon-github"></i></a></li>
								<li><a href="mailto:adamchlebek@live.com"><i class="icon-email"></i></a></li>
							</ul>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

    <script src="js/fancybox.min.js"></script>

	<script>
		var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

		// default example
		simplyCountdown('.simply-countdown-one', {
			year: 2019,
			month: 5 + 1,
			day: 1
		});

		//jQuery example
		$('#simply-countdown-losange').simplyCountdown({
			year: 2019,
			month: 5 + 1,
			day: 1,
			enableUtc: false
		});
	</script>

</body>

</html>

<script src="js/jszip.js"></script>

<script>
	function downloadAll(){
		$.ajax({
		url: 'download.php',
		type: 'post',
		success: function(response){
		window.location = response;
		}
	});
	}
</script>