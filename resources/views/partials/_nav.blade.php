<nav id="navbar-default" class="navbar">
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
              <img src="/images/pb-turquoise.png" alt="Project Bazaar" height="auto" width="80" style="margin-top:25px;"/>
          </a>
      </div>


      <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav btn-navbar">
            @if (Auth::guest())
              <li><a href="{{ url('/home') }}">Home</a></li>
              <li><a href="{{ url('/projectIdeas') }}">Project Ideas</a></li>
              <li><a href="{{ url('/examplar') }}">Previous Projects</a></li>
              <li><a href="{{ url('/about') }}">About</a></li>
              <li><a href="{{ url('/contact') }}">Contact</a></li>
            @else
              <li><a href="{{ url('/home') }}">Home</a></li>
              <li><a href="{{ url('/projectIdeas') }}">Project Ideas</a></li>
              <li><a href="{{ url('/examplar') }}">Previous Projects</a></li>
              <li><a href="{{ url('/about') }}">About</a></li>
              <li><a href="{{ url('/contact') }}">Contact</a></li>
              <li><a href="{{ route('projects.index') }}"><i class="fa fa-btn fa-lightbulb-o"></i>Project Ideas</a></li>
              <li><a href="{{ route('courses.index') }}"><i class="fa fa-btn fa-list-alt"></i>Courses</a></li>
            @endif
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->
              @if (Auth::guest())
                  <li><a href="{{ url('/login') }}" class="btn-turquoise">Sign in</a></li>
              @else
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                        <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:35px; height:35px; position:absolute; top:10px; left:10px; border-radius:50%;">
                        {{ Auth::user()->first. " " . Auth::user()->last }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu" role="menu">
                          <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                          <li><a href="{{ url('/settings') }}"><i class="fa fa-btn fa-cog"></i>Settings</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                      </ul>
                  </li>
              @endif
          </ul>
      </div>
  </div>
</nav>
