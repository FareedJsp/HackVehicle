<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      @guest
      
      <li class="nav-item">
        <a class="nav-link text-dark" href="{{route('login')}}">
          {{__('login')}}
        </a>
      </li>
      
      @else

    <li class="nav-item">
        <a class="nav-link text-dark" href="#" data-toggle="dropdown">
          {{Auth::User()->name}} <i class="nav-icon fa fa-sign-out-alt"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-item">
                <div class="media">
                    <div class="media-body text-dark">
                        <h3 class="dropdown-item-title">
                            {{Auth::User()->name ?? null}}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item dropdown-footer text-dark text-right" id="btn_logout"
                    href="{{ route('logout') }}" style="color: black !important;"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="nav-icon fa fa-sign-out-alt"></i> Logout
            </a>
            <form action="{{route('logout')}}" method="post" id="logout-form" style="display-none"> @csrf </form>
        </div>
      </li>
      @endguest
      
    </ul>
  </nav>
  <!-- /.navbar -->