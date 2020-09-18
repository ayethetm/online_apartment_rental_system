<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Apartment Rental System- @yield('title')</title>
    <link rel="icon" href="{{ asset('frontendtemplate/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontendtemplate/vendor/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontendtemplate/vendor/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontendtemplate/vendor/css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontendtemplate/vendor/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('frontendtemplate/vendor/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('frontendtemplate/vendor/css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontendtemplate/vendor/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('frontendtemplate/vendor/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('frontendtemplate/vendor/css/style.css')}}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="{{ asset('frontendtemplate/img/logo.png')}}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Types
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="category.html"> Apartment</a>
                                        <a class="dropdown-item" href="single-product.html">Condo</a>
                                        <a class="dropdown-item" href="category.html"> Mini Condo</a>
                                        <a class="dropdown-item" href="single-product.html">House</a>
                                        
                                        
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Townships
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="login.html"> Lanmadaw</a>
                                        <a class="dropdown-item" href="tracking.html">Latha</a>
                                        <a class="dropdown-item" href="checkout.html">Kyauktada</a>
                                       
                                    </div>

                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('')}}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div> -->
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <!-- <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Wood & Cloth
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="{{ asset('frontendtemplate/img/banner_img.png')}}" alt="">
                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Cloth & Wood
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="{{ asset('frontendtemplate/img/banner_img.png')}}" alt="">
                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Wood & Cloth
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="{{ asset('frontendtemplate/img/banner_img.png')}}" alt="">
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Cloth $ Wood Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div> -->
                    <!-- </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- banner part start-->


     @yield('content')

    <!--::footer_part start::-->
    <!-- <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Top Products</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Managed Website</a></li>
                            <li><a href="">Manage Reputation</a></li>
                            <li><a href="">Power Tools</a></li>
                            <li><a href="">Marketing Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Jobs</a></li>
                            <li><a href="">Brand Assets</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Features</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Jobs</a></li>
                            <li><a href="">Brand Assets</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Resources</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Guides</a></li>
                            <li><a href="">Research</a></li>
                            <li><a href="">Experts</a></li>
                            <li><a href="">Agencies</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_footer_part">
                        <h4>Newsletter</h4>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping
                        </p>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative mail_part">
                                <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                    class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = ' Email Address '">
                                <button type="submit" name="submit" id="newsletter-submit"
                                    class="email_icon newsletter-submit button-contactForm">subscribe</button>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="copyright_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="copyright_text">
                            <P><!Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
</P> -->
       <!--                  </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                                <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- </footer> -->
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="{{ asset('frontendtemplate/vendor/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{ asset('frontendtemplate/vendor/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('frontendtemplate/vendor/js/bootstrap.min.js')}}">
    </script>
    <!-- easing js -->
    <script src="{{ asset('frontendtemplate/vendor/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{ asset('frontendtemplate/vendor/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{ asset('frontendtemplate/vendor/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{ asset('frontendtemplate/vendor/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontendtemplate/vendor/js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{ asset('frontendtemplate/vendor/js/slick.min.js')}}"></script>
    <script src="{{ asset('frontendtemplate/vendor/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('frontendtemplate/vendor/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('frontendtemplate/vendor/js/contact.js')}}"></script>
    <script src="{{ asset('frontendtemplate/vendor/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('frontendtemplate/vendor/js/jquery.form.js')}}"></script>
    <script src="{{ asset('frontendtemplate/vendor/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('frontendtemplate/vendor/js/mail-script.js')}}"></script>
    <!-- custom js -->
    <script src="{{ asset('frontendtemplate/vendor/js/custom.js')}}"></script>
</body>

</html>