<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
    <link href="/css/app.css" rel="stylesheet">

    <script type="text/javascript" src="../../scripts/navigatingButtons.js"></script>
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
  <div class="wrapper">
    <div id="blur">
      <img src="/images/pb-turquoise.png" alt="Project Bazaar" height="auto" width="200"/>
    </div>
      <div class="navbar-default-blur"> &nbsp; </div>
      <nav id="navbar-default" class="navbar navbar-fixed-top navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" style="margin-bottom:120px;">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/pb-turquoise.png" alt="Project Bazaar" height="auto" width="80"/>
                </a>
            </div>


            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
            @if (Auth::user())
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}" class="btn-navbar">Home</a></li>
                    <li><a href="{{ url('/projects') }}" class="btn-navbar">Projects</a></li>
                    <li><a href="{{ url('/myspace') }}" class="btn-navbar">My Space</a></li>
                </ul>
            @endif

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Sign in</a></li>
                        <li><a href="{{ url('/register') }}" class="btn-signup">Sign up</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                              <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:35px; height:35px; position:absolute; top:10px; left:10px; border-radius:50%;">
                              {{ Auth::user()->first. " " . Auth::user()->last }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                                <li><a href="{{ url('/settings') }}"><i class="fa fa-btn fa-cog"></i>Settings</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('sidebar')
    @yield('content')

  </div>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="../../../assets/cripts/jquery.mobile.custom.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
  <footer class="row">
    <div class="col-sm-12 footer">
      <div class="col-sm-3">
        <img src="/images/pb-logo-turquoise.png" alt="Project Bazaar" height="auto" width="200"/>
      </div>
      <div class="col-sm-3">
        Hello
      </div>
      <div class="col-sm-3">
        Hello
      </div>
      <div class="col-sm-3">
        Hello
      </div>
    </div>
  </footer>
</body>
</html>
