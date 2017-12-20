<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('assets/bs/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap-override.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}">
    <script src="{{ url('assets/js/jquery-3.2.1.min.js') }} " ></script>
</head>
<body id="app-layout">
  <div class="row" style="margin:0; background: #fff; border-bottom: 0.1pt solid #f0f0f0; padding: 0.1em;    margin-bottom: 0em;">
      <div class="col-lg-1"></div>
      <div class="col-lg-10 col-md-12" style="padding:0;">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="{{ url('/') }}">
                  <span id="logo-name" >Gratis Scout</span>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Cars</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Immo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Others</a>
                        </li>
                      @if (Auth::guest())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Login</a>
                        </li>
                      @endif
                      <!-- Authentication Links -->
                      @if (!Auth::guest())
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                            </div>
                        </li>
                      @endif
                  </ul>
              </div>
          </nav>
      </div>
      <div class="col-lg-1"></div>

  </div>


<div class="row">
    <div class="col-lg-1"></div>
        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12" style="padding:0;">
            @yield('content')
        </div>
    <div class="col-lg-1"></div>
</div>
<div class="row footer-wrapper" style="     margin-top: 1em;   padding: 1em 0.5em; border-top: 0.1pt solid #eaeaea;color: #888;">
    <div class="col-lg-1"></div>
        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-12">
                    &copy; Gratisscout Inc. All Rights Reserved.
                </div>
            </div>
        </div>
    <div class="col-lg-1"></div>
</div>
    <!-- JavaScripts -->

    <script src="{{ url('assets/bs/jquery-3.2.1.slim.min.js') }} " ></script>
    <script src="{{ url('assets/bs/popper.min.js') }} "></script>
    <script src="{{ url('assets/bs/bootstrap.min.js') }}" ></script>


</body>
</html>
