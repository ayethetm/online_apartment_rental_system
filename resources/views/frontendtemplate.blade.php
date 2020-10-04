<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="description" content="Real estate HTML Template">
	<meta name="keywords" content="real estate, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="{{asset('frontendtemplate/img/favicon.ico')}}" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900%7cRoboto:400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

 
	<!-- Stylesheets -->

	<link rel="stylesheet" href="{{asset('frontendtemplate/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('frontendtemplate/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('frontendtemplate/css/slicknav.min.css')}}"/>
	<link href="{{asset('frontendtemplate/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{asset('frontendtemplate/css/style.css')}}"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section">
		<a href="index.html" class="site-logo">
			<img src="{{asset('frontendtemplate/img/logo.png')}}" alt="">
		</a>
		<nav class="header-nav">
			<ul class="main-menu">
				<li><a href="{{route('posts.index')}}" class="active">Home</a></li>
				<li><a href="#">Townships</a>
					<ul class="sub-menu">
						<li><a href="{{route('township_lanmadaw')}}">Lanmadaw</a></li>
						<li><a href="{{route('township_latha')}}">Latha
						</a></li>
						<li><a href="{{route('township_hlaing')}}">Hlaing</a></li>
					</ul>
				</li>
				<li><a href="#">Types</a>
					<ul class="sub-menu">
						<li><a href="{{route('apartment')}}">Apartment
						</a></li>
						<li><a href="{{route('condo')}}">Condo
						</a></li>
						<li><a href="{{route('minicondo')}}">Mini Condo
						</a></li>
						<li><a href="{{route('house')}}">House
						</a></li>
					</ul>
				</li>
				<li><a href="#">Prices</a>
					<ul class="sub-menu">
						<li><a href="{{route('lowertohigherprice')}}">Lower
						</a></li>
						<li><a href="{{route('highertolowerprice')}}">Higher
						</a></li>
					</ul>
				</li>
				
			
				@guest
                    <li >
                        <a  href="{{ route('login') }}">
                            </i>
                                {{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a  href="{{ route('register') }}">
                                          {{ __('Join Us') }}</a>
                                </li>
                            @endif
                @else
                <li>
                                    <a href="#">
                                        {{ Auth::user()->name }}
                                    </a>
                                      	<ul class="sub-menu">
                                      		<li>
                                      			 <a href="{{route('postviewbyuser')}}">My Posts</a>
                                      		</li>
                                         
                                        	<li>
                                        		<a href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              @csrf
                                          </form>
                                        	</li>
                                        </ul>
                                    </li>
                @endguest
        	</ul>
                          
			<div class="header-right">
				<div class="user-panel">
					<a href="{{route('posts.create')}}" class="post">Post Property</a>
				</div>
			</div>
		
		</nav>
	</header>
	<!-- Header Section end -->

	<!-- content Section starts -->

	  @yield('content')

	<!-- content Section ends -->

	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row text-white">
				<div class="col-lg-4">
					<div class="footer-widger">
						<div class="about-widget">
							<div class="aw-text">
								<img src="{{asset('frontendtemplate/img/footer-logo.png')}}" alt="">
								<p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate cong ue rutrum. Fusce lobortis a enim eget tempus. </p>
								<a href="#" class="site-btn">we are hiring</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="footer-widger">
						<h2>Company</h2>
						<ul>
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Clients</a></li>
							<li><a href="#">Testimonials</a></li>
							<li><a href="#">Carrers</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="footer-widger">
						<h2>For Buyers</h2>
						<ul>
							<li><a href="#">Buy with us</a></li>
							<li><a href="#">Papers</a></li>
							<li><a href="#">Clients</a></li>
							<li><a href="#">Testimonials</a></li>
							<li><a href="#">Homes</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="footer-widger">
						<h2>For Sellers</h2>
						<ul>
							<li><a href="#">Seel With us</a></li>
							<li><a href="#">What do You Need</a></li>
							<li><a href="#">Clients</a></li>
							<li><a href="#">Testimonials</a></li>
							<li><a href="#">Guideline</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="footer-widger">
						<h2>For Renters</h2>
						<ul>
							<li><a href="#">Rent with us</a></li>
							<li><a href="#">Guidelines</a></li>
							<li><a href="#">Apartments</a></li>
							<li><a href="#">Flats</a></li>
							<li><a href="#">Houses</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
	</footer>
	<!-- Footer Section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('frontendtemplate/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('frontendtemplate/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontendtemplate/js/jquery.slicknav.min.js')}}"></script>
	<script src="{{asset('frontendtemplate/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('frontendtemplate/js/main.js')}}"></script>

	</body>
</html>
