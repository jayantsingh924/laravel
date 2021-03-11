<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<head>

    <title>Dashboard</title>
    <link rel="apple-touch-icon" href="{{ asset('admin/images/favicon/apple-touch-icon-152x152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/images/favicon/favicon-32x32.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/vertical-gradient-menu-template/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/vertical-gradient-menu-template/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/pages/dashboard.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/custom/custom.css')}}">

  </head>


  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-gradient-menu preload-transitions 2-columns" data-open="click" data-menu="vertical-gradient-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light">
          <div class="nav-wrapper">
           
            <ul class="navbar-list right">
             
            
              <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="{{ asset('admin/images/avatar/avatar-7.png') }}" alt="avatar"><i></i></span></a></li>

      
            </ul>
        
      
  
            <ul class="dropdown-content" id="profile-dropdown">
              <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>

         
              <li class="divider"></li>

       
              <li><a class="grey-text text-darken-1" href="logout"><i class="material-icons">keyboard_tab</i> Logout</a></li>
            </ul>
          </div>
   
        </nav>
      </div>
    </header>
   




@include('admin.layout.sidebar')
@yield('content')








    <script src="{{ asset('admin/js/vendors.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins.min.js') }}"></script>
    <script src="{{ asset('admin/js/search.min.js') }}"></script>
    <script src="{{ asset('admin/js/custom/custom-script.min.js') }}"></script>
    <script src="{{ asset('admin/js/scripts/customizer.min.js') }}"></script>
    <script src="{{ asset('admin/js/scripts/dashboard-ecommerce.min.js') }}"></script>
    @stack('footer-scripts')
 
  </body>

</html>