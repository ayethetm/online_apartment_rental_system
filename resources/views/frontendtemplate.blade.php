<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Apartment Rental System- @yield('title')</title>
     <link href="{{asset('frontendtemplate/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
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
    
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('frontendtemplate/vendor/css/style.css')}}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-md ml-auto navbar-light" style="background-color: #F8CD5D;" >
                        <a class="navbar-brand ml-5" href="{{route('posts.index')}}"> 
                            <img src="{{ asset('frontendtemplate/img/logo.png')}}" class="d-block w-75 h-25" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('posts.index')}}">မူလ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('posts.create')}}">ကြော်ငြာတင်မည်</a>
                                </li>

                                <!-- <li class="nav-item">
                                  <a class="nav-link">
                                    <form action="/postsearch" method="get">
                                      <div class="input-group">
                                        <input type="search" name="search" class="form-control">
                                        <span class="input-group-prepand">
                                          <button type="submit" class="btn" style="background-color:#E26241;color: white;">Search</button>
                                        </span>
                                      </div>
                                    </form>
                                  </a>
                              </li> -->

                                @guest
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                  </li>
                                  @if (Route::has('register'))
                                      <li class="nav-item">
                                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                      </li>
                                  @endif
                              @else
                              <li class="nav-item dropdown">
                                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          {{ Auth::user()->name }} <span class="caret"></span>
                                      </a>

                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                          <a href="{{route('postviewbyuser')}}" class="dropdown-item">My Posts</a>
                                        
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              @csrf
                                          </form>

                                      </div>
                                  </li>
                              @endguest
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        
    </header>
    <!-- Header part end-->

   
   
     @yield('content')
 

    <!--::footer_part start::-->
    <footer class="copyright_part">
        <div >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright_text text-center">
                            <P> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by Colorlib</a>
                            </P>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="{{ asset('frontendtemplate/vendor/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
   <!--  <script src="{{ asset('frontendtemplate/vendor/js/popper.min.js')}}"></script> -->
    <!-- bootstrap js -->
    <script src="{{ asset('frontendtemplate/vendor/js/bootstrap.min.js')}}">
    </script>
  
    <script src="{{ asset('frontendtemplate/vendor/js/custom.js')}}"></script>
</body>

</html>