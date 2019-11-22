	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		 <link rel="" type="image/png" sizes="76x76" href="{{asset('admin/assets/img/naizz.png')}}">
 		 <link rel="" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/naizz.png')}}">
		
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>{{config('sekolah.title')}}</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/linearicons.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/font-awesome.min.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/bootstrap.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/magnific-popup.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/nice-select.css">							
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/animate.min.css">
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/owl.carousel.css">			
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/jquery-ui.css">			
			<link rel="stylesheet" href="{{asset('/frontend')}}/css/main.css">
		</head>
		<body>	
		  <header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
			  				<ul>
								<li><a href="{{config('sekolah.facebook_url')}}"><i class="fa fa-facebook"></i></a></li>
								<li><a href="{{config('sekolah.twitter_url')}}"><i class="fa fa-twitter"></i></a></li>						
							</ul>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
			  				<a href="#"><span class="lnr lnr-phone-handset"></span> <span class="text">{{config('sekolah.telpon')}}</span></a>
			  				<a href="#"><span class="lnr lnr-envelope"></span> <span class="text">{{config('sekolah.email')}}</span></a>			
			  			</div>
			  		</div>			  					
	  			</div>
			</div>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><img src="{{config('sekolah.logo_url')}}" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="/">Home</a></li>	          			          		          
			          <li><a href="/register">Daftar</a></li>
			          <li><a href="/login">Login</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->
		  	@yield('content')

		  	
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
														
					</div>
					<div class="footer-bottom row align-items-center justify-content-between">
						<p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"> LOVE</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						<div class="col-lg-6 col-sm-12 footer-social">
							<a href="https://www.facebook.com/MasApi20"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-github"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>						
				</div>
			</footer>	
			<!-- End footer Area -->	


			<script src="{{asset('/frontend')}}/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{asset('/frontend')}}/js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{asset('/frontend')}}/js/easing.min.js"></script>			
			<script src="{{asset('/frontend')}}/js/hoverIntent.js"></script>
			<script src="{{asset('/frontend')}}/js/superfish.min.js"></script>	
			<script src="{{asset('/frontend')}}/js/jquery.ajaxchimp.min.js"></script>
			<script src="{{asset('/frontend')}}/js/jquery.magnific-popup.min.js"></script>	
    		<script src="{{asset('/frontend')}}/js/jquery.tabs.min.js"></script>						
			<script src="{{asset('/frontend')}}/js/jquery.nice-select.min.js"></script>	
			<script src="{{asset('/frontend')}}/js/owl.carousel.min.js"></script>									
			<script src="{{asset('/frontend')}}/js/mail-script.js"></script>	
			<script src="{{asset('/frontend')}}/js/main.js"></script>	
		</body>
	</html>