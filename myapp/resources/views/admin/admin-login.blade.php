<!DOCTYPE html>


<head>
  
    <title>User Login </title>
    <link rel="apple-touch-icon" href="{{ asset('admin/images/favicon/apple-touch-icon-152x152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/images/favicon/favicon-32x32.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/vendors.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/vertical-gradient-menu-template/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themes/vertical-gradient-menu-template/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/pages/login.css')}}">
   
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/custom/custom.css')}}">
  
  </head>

  
  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-gradient-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-gradient-menu" data-col="1-column">
    <div class="row">
      <div class="col s12">
        <div class="container"><div id="login-page" class="row">
  <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">

    <form action="{{ route('admin.auth') }}" class="login-form" method="post">
      @csrf

      <div class="row">
        <div class="input-field col s12">
          <h5 class="ml-4">Sign in</h5>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="email" type="email" name="email" required> 
          <label for="email" class="center-align">Email</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input id="password" type="password" name="password" required>
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m12 l12 ml-2 mt-1">
          <p>
            <label>
              <input type="checkbox" />
              <span>Remember Me</span>
            </label>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        
             <button type="submit"  class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>

        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 m6 l6">
          <p class="margin medium-small"><a href="user-register.html">Register Now!</a></p>
        </div>
        <div class="input-field col s6 m6 l6">
          <p class="margin right-align medium-small"><a href="user-forgot-password.html">Forgot password ?</a></p>
        </div>
    
      </div>

       <div class="row">
        <div class="input-field col s12 m12 32">
          <div class="card-alert card gradient-45deg-red-pink">
                <div class="card-content white-text">
                  <p> <i class="material-icons">error</i> {{session('error')}} </p>
                </div>
           </div>
    
        </div>
       </div>




    </form>

  </div>
</div>
        </div>
        <div class="content-overlay"></div>
      </div>
    </div>

  
    <script src="{{ asset('admin/js/vendors.min.js')}}"></script>
    <script src="{{ asset('admin/js/plugins.min.js')}}"></script>
    <script src="{{ asset('admin/js/search.min.js')}}"></script>
    <script src="{{ asset('admin/js/custom/custom-script.min.js')}}"></script>

  </body>

</html>