<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@yield('header_meta')
	@include('wadev.site::site.layout.sub.meta')
	<title>@yield('title')</title>
	
	<meta name="keywords" content="website sekolah" />
	<meta name="author" content="freehtml5.co" />

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="/standard/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/standard/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/standard/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/standard/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="/standard/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/standard/css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="/standard/css/flexslider.css">

	<!-- Pricing -->
	<link rel="stylesheet" href="/standard/css/pricing.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="/standard/css/style.css">
	{{-- Additional CSS --}}
	@yield('css')
	<!-- Modernizr JS -->
	<script src="/standard/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    {{-- Additional JS --}}
	@yield('js')
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-right">
							<p class="site">www.abdulhanan.com</p>
							<p class="num">Call: +6283817520840</p>
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="fh5co-logo"><a href="index.html"><i class="icon-study"></i>Educ<span>.</span></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="#">Home</a></li>
								<li><a href="courses.html">Courses</a></li>
								<li><a href="teacher.html">Teacher</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="pricing.html">Pricing</a></li>
								<li class="has-dropdown">
									<a href="blog.html">Blog</a>
									<ul class="dropdown">
										<li><a href="#">Web Design</a></li>
										<li><a href="#">eCommerce</a></li>
										<li><a href="#">Branding</a></li>
										<li><a href="#">API</a></li>
									</ul>
								</li>
								<li><a href="/site/contact/">Contact</a></li>
								<li class="btn-cta"><a href="#"><span>Login</span></a></li>
								<li class="btn-cta"><a href="#"><span>Create a Course</span></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</nav>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="/standard/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/standard/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/standard/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/standard/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="/standard/js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="/standard/js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="/standard/js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="/standard/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="/standard/js/jquery.magnific-popup.min.js"></script>
	<script src="/standard/js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="/standard/js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="/standard/js/main.js"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
		@yield('body')
		@include('wadev.site::site.layout.sub.footer')
</div>
	</body>
</html>

