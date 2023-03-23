<!DOCTYPE html>
<html lang="en">
<head>
	<title>Secop Tracker v1.0</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/css/navigation.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/css/settings.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/MagnificPopup/magnific-popup.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header-v2">
		<!-- Header desktop -->
		<nav class="container-header-desktop">
			<div class="wrap-menu-desktop">
				<div class="limiter-menu-desktop container">					
					<!-- Logo desktop -->		
					<div class="logo">
						<a href="index.html"><img src="images/icons/logo-tracker.png" alt="LOGO"></a>
					</div>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu respon-sub-menu">
							<li>
								<a href="{{ route('home')}}">Home</a>								
							</li>

							<li>
								<a href="{{route('aboutus')}}">Nosotros</a>
							</li>

							<li>
								<a href="{{ route('price')}}">Precios</a>								
							</li>

							<li>
								<a href="{{ route('articles')}}">Aritulos</a>								
							</li>

							<li>
								<a href="{{ route('contact')}}">Contactenos</a>								
							</li>
<!--
							<li>
								<a href="shop-grid.html">Shop</a>
								<ul class="sub-menu">
									<li><a href="shop-grid.html">Shop Grid</a></li>
									<li><a href="shop-detail.html">Shop Detail</a></li>
									<li><a href="shop-cart.html">Shop Cart</a></li>
								</ul>
							</li>

							<li>
								<a href="contact.html">Contact us</a>
							</li>

              <!-- login and register -->

			  @Auth
				 <li>
					<a href="{{ route('dashboard')}}">Dashboard</a>
				 </li>
			  @else

			  <li>
				<a href="{{ route('login')}}">Login</a>	
			  </li>
			<li>           						
			  	<a href="{{ route('register')}}">Registro</a>
			</li>

			  @endauth

			  
						</ul>
					</div>					
				</div>
			</div>	
		</nav>

		<!-- Header Mobile -->
		<nav class="container-header-mobile">
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->		
				<div class="logo-mobile">
					<a href="index.html"><img src="images/icons/logo-01.png" alt="LOGO"></a>
				</div>
				

				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>			
			</div>

			<div class="menu-mobile">
			</div>
		</nav>
	</header>

	<!-- Slide -->
	<section class="slider">
		<div class="rev_slider_wrapper fullwidthbanner-container">
			<div id="rev_slider_2" class="rev_slider fullwidthabanner" data-version="5.4.5" style="display:none">
				<ul>
					<!-- Slide 1 -->
					<li data-transition="slidingoverlayhorizontal">
						<img src="{{ asset('images/owns/1.png')}}" alt="IMG-SLIDE" class="rev-slidebg">

						<h2 class="tp-caption tp-resizeme caption-1 text-uppercase" 
						data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:left;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					    data-visibility="['on', 'on', 'on', 'on']"
 
					    data-fontsize="['48', '48', '48', '38']" 
					    data-lineheight="['58', '58', '58', '58']"
					    data-color="['#FFF']" 
					    data-textAlign="['right', 'center', 'center', 'center']"
					 
					    data-x="['center']" 
					    data-y="['center']" 
					    data-hoffset="['0', '0', '0', '0']" 
					    data-voffset="['-83', '-83', '-83', '-93']" 
					 
					    data-width="['1200','992','768','480']"
					    data-height="['auto', 'auto', 'auto', 'auto']" 
					    data-whitespace="['normal']" 
					 
					    data-paddingtop="[0, 0, 0, 0]"
					    data-paddingright="[15, 15, 15, 15]"
					    data-paddingbottom="[0, 0, 0, 0]"
					    data-paddingleft="[15, 15, 15, 15]"

					    data-basealign="slide" 
    					data-responsive_offset="off"
					    >meet our experts</h2>

					    <p class="tp-caption tp-resizeme caption-2" 
						data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					    data-visibility="['on', 'on', 'on', 'on']"
 
					    data-fontsize="['30', '30', '30', '25']" 
					    data-lineheight="['39', '39', '39', '39']"
					    data-color="['#FFF']" 
					    data-textAlign="['right', 'center', 'center', 'center']"
					 
					    data-x="['center']" 
					    data-y="['center']" 
					    data-hoffset="['0', '0', '0', '0']" 
					    data-voffset="['-13', '-13', '-13', '-13']" 
					 
					    data-width="['1200','992','768','480']"
					    data-height="['auto', 'auto', 'auto', 'auto']" 
					    data-whitespace="['normal']" 
					 
					    data-paddingtop="[0, 0, 0, 0]"
					    data-paddingright="[15, 15, 15, 15]"
					    data-paddingbottom="[0, 0, 0, 0]"
					    data-paddingleft="[15, 15, 15, 15]"

					    data-basealign="slide" 
    					data-responsive_offset="off"
					    >
					    	We always support you on the road of business
					    </p>

					    <div class="tp-caption tp-resizeme caption-3 flex-wr-c-c d-flex justify-content-lg-end"
					    data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					    data-x="['center']" 
					    data-y="['center']" 
					    data-hoffset="['0', '0', '0', '0']" 
					    data-voffset="['88', '88', '88', '88']" 
					 
					    data-width="['1200','992','768','480']"
					    data-height="['auto']" 
					 
					    data-paddingtop="[0, 0, 0, 0]"
					    data-paddingright="[10, 10, 10, 10]"
					    data-paddingbottom="[0, 0, 0, 0]"
					    data-paddingleft="[10, 10, 10, 10]"

					    data-basealign="slide" 
    					data-responsive_offset="off"
					    >
						    <a href="projects-grid.html" class="btn1 flex-c-c">
						    	Our project
						    </a>

						    <a href="about.html" class="btn2 flex-c-c">
						    	Learn more
						    </a>
					    </div>
					</li>

					<!-- Slide 2 -->
					<li data-transition="slidingoverlayvertical">
						<img src="{{ asset('images/owns/2.png')}}" alt="IMG-SLIDE" class="rev-slidebg">

						<h2 class="tp-caption tp-resizeme caption-1 text-uppercase" 
						data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					    data-visibility="['on', 'on', 'on', 'on']"
 
					    data-fontsize="['48', '48', '48', '38']" 
					    data-lineheight="['58', '58', '58', '58']"
					    data-color="['#FFF']" 
					    data-textAlign="['right', 'center', 'center', 'center']"
					 
					    data-x="['center']" 
					    data-y="['center']" 
					    data-hoffset="['0', '0', '0', '0']" 
					    data-voffset="['-83', '-83', '-83', '-93']" 
					 
					    data-width="['1200','992','768','480']"
					    data-height="['auto', 'auto', 'auto', 'auto']" 
					    data-whitespace="['normal']" 
					 
					    data-paddingtop="[0, 0, 0, 0]"
					    data-paddingright="[15, 15, 15, 15]"
					    data-paddingbottom="[0, 0, 0, 0]"
					    data-paddingleft="[15, 15, 15, 15]"

					    data-basealign="slide" 
    					data-responsive_offset="off"
					    >meet our experts</h2>

					    <p class="tp-caption tp-resizeme caption-2" 
						data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					    data-visibility="['on', 'on', 'on', 'on']"
 
					    data-fontsize="['30', '30', '30', '25']" 
					    data-lineheight="['39', '39', '39', '39']"
					    data-color="['#FFF']" 
					    data-textAlign="['right', 'center', 'center', 'center']"
					 
					    data-x="['center']" 
					    data-y="['center']" 
					    data-hoffset="['0', '0', '0', '0']" 
					    data-voffset="['-13', '-13', '-13', '-13']" 
					 
					    data-width="['1200','992','768','480']"
					    data-height="['auto', 'auto', 'auto', 'auto']" 
					    data-whitespace="['normal']" 
					 
					    data-paddingtop="[0, 0, 0, 0]"
					    data-paddingright="[15, 15, 15, 15]"
					    data-paddingbottom="[0, 0, 0, 0]"
					    data-paddingleft="[15, 15, 15, 15]"

					    data-basealign="slide" 
    					data-responsive_offset="off"
					    >
					    	We always support you on the road of business
					    </p>

					    <div class="tp-caption tp-resizeme caption-3 flex-wr-c-c d-flex justify-content-lg-end"
					    data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					    data-x="['center']" 
					    data-y="['center']" 
					    data-hoffset="['0', '0', '0', '0']" 
					    data-voffset="['88', '88', '88', '88']" 
					 
					    data-width="['1200','992','768','480']"
					    data-height="['auto']" 
					 
					    data-paddingtop="[0, 0, 0, 0]"
					    data-paddingright="[10, 10, 10, 10]"
					    data-paddingbottom="[0, 0, 0, 0]"
					    data-paddingleft="[10, 10, 10, 10]"

					    data-basealign="slide" 
    					data-responsive_offset="off"
					    >
						    <a href="projects-grid.html" class="btn1 flex-c-c">
						    	Our project
						    </a>

						    <a href="about.html" class="btn2 flex-c-c">
						    	Learn more
						    </a>
					    </div>
					</li>

					<!-- Slide 3 -->
					<li data-transition="boxslide">
						<img src="{{ asset('images/owns/3.png')}}" alt="IMG-SLIDE" class="rev-slidebg">

						<h2 class="tp-caption tp-resizeme caption-1 text-uppercase" 
						data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:-500px;skX:85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					    data-visibility="['on', 'on', 'on', 'on']"
 
					    data-fontsize="['48', '48', '48', '38']" 
					    data-lineheight="['58', '58', '58', '58']"
					    data-color="['#FFF']" 
					    data-textAlign="['right', 'center', 'center', 'center']"
					 
					    data-x="['center']" 
					    data-y="['center']" 
					    data-hoffset="['0', '0', '0', '0']" 
					    data-voffset="['-83', '-83', '-83', '-93']" 
					 
					    data-width="['1200','992','768','480']"
					    data-height="['auto', 'auto', 'auto', 'auto']" 
					    data-whitespace="['normal']" 
					 
					    data-paddingtop="[0, 0, 0, 0]"
					    data-paddingright="[15, 15, 15, 15]"
					    data-paddingbottom="[0, 0, 0, 0]"
					    data-paddingleft="[15, 15, 15, 15]"

					    data-basealign="slide" 
    					data-responsive_offset="off"
					    >meet our experts</h2>

					    <p class="tp-caption tp-resizeme caption-2" 
						data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:500px;skX:-85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					    data-visibility="['on', 'on', 'on', 'on']"
 
					    data-fontsize="['30', '30', '30', '25']" 
					    data-lineheight="['39', '39', '39', '39']"
					    data-color="['#FFF']" 
					    data-textAlign="['right', 'center', 'center', 'center']"
					 
					    data-x="['center']" 
					    data-y="['center']" 
					    data-hoffset="['0', '0', '0', '0']" 
					    data-voffset="['-13', '-13', '-13', '-13']" 
					 
					    data-width="['1200','992','768','480']"
					    data-height="['auto', 'auto', 'auto', 'auto']" 
					    data-whitespace="['normal']" 
					 
					    data-paddingtop="[0, 0, 0, 0]"
					    data-paddingright="[15, 15, 15, 15]"
					    data-paddingbottom="[0, 0, 0, 0]"
					    data-paddingleft="[15, 15, 15, 15]"

					    data-basealign="slide" 
    					data-responsive_offset="off"
					    >
					    	We always support you on the road of business
					    </p>

					    <div class="tp-caption tp-resizeme caption-3 flex-wr-c-c d-flex justify-content-lg-end"
					    data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"y:bottom;rZ:90deg;sX:2;sY:2;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
					    data-x="['center']" 
					    data-y="['center']" 
					    data-hoffset="['0', '0', '0', '0']" 
					    data-voffset="['88', '88', '88', '88']" 
					 
					    data-width="['1200','992','768','480']"
					    data-height="['auto']" 
					 
					    data-paddingtop="[0, 0, 0, 0]"
					    data-paddingright="[10, 10, 10, 10]"
					    data-paddingbottom="[0, 0, 0, 0]"
					    data-paddingleft="[10, 10, 10, 10]"

					    data-basealign="slide" 
    					data-responsive_offset="off"
					    >
						    <a href="projects-grid.html" class="btn1 flex-c-c">
						    	Our project
						    </a>

						    <a href="about.html" class="btn2 flex-c-c">
						    	Learn more
						    </a>
					    </div>
					</li>
				</ul>				
			</div>
		</div>
	</section>

	@yield('content')
	
	<!-- Footer -->
	<footer>
		<div class="parallax100 kit-overlay1 p-t-35 p-b-15" style="background-image: url(images/bg-03.jpg);">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-sm-8 col-md-5 col-lg-3 p-b-20">
						<div class="size-h-1 flex-s-e p-b-6 m-b-18">
							<a href="#">
								<img class="max-s-full" src="images/icons/logo-tracker.png" alt="IMG">
							</a>
						</div>

						<div>
							<p class="t1-s-2 cl-13 p-b-9">
								On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized   the charms of pleasure of.
							</p>
						</div>
					</div>

					<div class="col-sm-8 col-md-5 col-lg-3 p-b-20">
						<div class="size-h-1 flex-s-e m-b-18">
							<h4 class="t1-m-3 text-uppercase cl-0">
								Contacto
							</h4>
						</div>

						<ul>
							<li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
								<span class="size-w-3">
									<i class="fa fa-home" aria-hidden="true"></i>
								</span>

								<span class="size-w-4">
									Cra 15 # 3AN - 10, Piedecuesta
								</span>
							</li>

							<li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
								<span class="size-w-3">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
								</span>

								<span class="size-w-4">
									contacto@tracker.com
								</span>
							</li>

							<li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
								<span class="size-w-3">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>

								<span class="size-w-4">
									(+57) 3157797882
									<br>
									<!-- (+1) 96 716 6897 -->
								</span>
							</li>
						</ul>
					</div>

					<div class="col-sm-8 col-md-5 col-lg-3 p-b-20">
						<div class="size-h-1 flex-s-e m-b-18">
							<h4 class="t1-m-3 text-uppercase cl-0">
								Company
							</h4>
						</div>

						<div class="flex-wr-s-s">
							<ul class="w-50">
								<li class="kit-list1 p-b-9">
									<a href="index.html" class="t1-s-2 cl-13 hov-link2 trans-02">
										Home
									</a>
								</li>

								<li class="kit-list1 p-b-9">
									<a href="projects-grid.html" class="t1-s-2 cl-13 hov-link2 trans-02">
										Projects
									</a>
								</li>

								<li class="kit-list1 p-b-9">
									<a href="services-list.html" class="t1-s-2 cl-13 hov-link2 trans-02">
										Services
									</a>
								</li>

								<li class="kit-list1 p-b-9">
									<a href="about.html" class="t1-s-2 cl-13 hov-link2 trans-02">
										About us
									</a>
								</li>

								<li class="kit-list1 p-b-9">
									<a href="contact.html" class="t1-s-2 cl-13 hov-link2 trans-02">
										Contact
									</a>
								</li>
							</ul>

							<ul class="w-50">
								<li class="kit-list1 p-b-9">
									<a href="#" class="t1-s-2 cl-13 hov-link2 trans-02">
										Blogs
									</a>
								</li>

								<li class="kit-list1 p-b-9">
									<a href="#" class="t1-s-2 cl-13 hov-link2 trans-02">
										404 Page
									</a>
								</li>

								<li class="kit-list1 p-b-9">
									<a href="shop-grid.html" class="t1-s-2 cl-13 hov-link2 trans-02">
										Shop
									</a>
								</li>

								<li class="kit-list1 p-b-9">
									<a href="#" class="t1-s-2 cl-13 hov-link2 trans-02">
										Elements
									</a>
								</li>

								<li class="kit-list1 p-b-9">
									<a href="typography.html" class="t1-s-2 cl-13 hov-link2 trans-02">
										Typography
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-sm-8 col-md-5 col-lg-3 p-b-20">
						<div class="size-h-1 flex-s-e m-b-18">
							<h4 class="t1-m-3 text-uppercase cl-0">
								subscribe
							</h4>
						</div>

						<div class="p-t-6">
							<form class="flex-wr-c-c m-b-15">
								<input class="size-a-17 bg-0 t1-s-2 plh-6 cl-6 p-rl-20" type="text" name="email" placeholder="Your E-mail">

								<button class="flex-c-c size-a-16 bg-11 fs-18 cl-10 hov-btn3 trans-02">
									<i class="fa fa-envelope-o"></i>
								</button>
							</form>

							<div class="flex-wr-s-c p-t-10">
								<a href="#" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
									<i class="fa fa-facebook"></i>	
								</a>

								<a href="#" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
									<i class="fa fa-twitter"></i>	
								</a>

								<a href="#" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
									<i class="fa fa-google-plus"></i>	
								</a>

								<a href="#" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
									<i class="fa fa-instagram"></i>	
								</a>

								<a href="#" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
									<i class="fa fa-linkedin"></i>	
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg-10">
			<div class="container txt-center p-tb-15">
				<span class="t1-s-2 cl-14">
					Copyright @ 2023 power by Hover ingenieria. All rights reserved. 
				</span>
			</div>
		</div>
	</footer>


<!--===============================================================================================-->	
	<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{ asset('vendor/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
	<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
	<script src="{{ asset('js/revo-custom.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/parallax100/parallax100.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/waypoint/jquery.waypoints.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/countterup/jquery.counterup.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/slick/slick.min.js')}}"></script>
	<script src="{{ asset('js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('js/main.js')}}"></script>

</body>
</html>