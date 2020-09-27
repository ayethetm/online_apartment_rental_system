<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('backendtemplate/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('backendtemplate/css/sb-admin-2.css')}}" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion font-weight-bold" id="accordionSidebar shadow " >

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user-circle"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
         
         Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
         <i class="fas fa-fw fa-home"></i>
          Home</a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Sidebar Heading -->
       <div class="sidebar-heading">
        User Management
      </div>
      <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">
          <i class="fas fa-fw fa-users"></i>
          Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('agency')}}">
          <i class="fas fa-fw fa-user-tie"></i>
          Agencies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('postview')}}">
          <i class="fas fa-fw fa-list-alt"></i>
          Posts</a>
      </li>
      <hr class="sidebar-divider">
      <!-- Sidebar Heading -->
       <div class="sidebar-heading">
        System Management
      </div>
      <li class="nav-item">
        <a class="nav-link" href="{{route('townships.index')}}">
          <i class="fas fa-fw fa-warehouse"></i>
         Townships</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('types.index')}}">
          <i class="fas fa-fw fa-th-list"></i>
          Types</a>
      </li>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand topbar mb-3 static-top shadow justify-content-center">
          <img src="{{asset('backendtemplate/img/logo.png')}}" class="img-fluid">
          </h2>
         
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        @yield('content')
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
          Copyright &copy; SB Admin 2 Template | <span class="font-weight-bold">Aranoz.</span> Online Apartment Rental System
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>


  <!-- Scroll to Top Button-->

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('backendtemplate/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('backendtemplate/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 
  <!-- Core plugin JavaScript-->
  <script src="{{asset('backendtemplate/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('backendtemplate/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('backendtemplate/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('backendtemplate/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('backendtemplate/js/demo/chart-pie-demo.js')}}"></script>
   
  @yield('script')
</body>

</html>
