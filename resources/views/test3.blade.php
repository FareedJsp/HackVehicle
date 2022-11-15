@extends('layouts.main')

@section('content')

<nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </nav>

  <div class="dropdown">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Dropdown link
    </a>
  
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
  </div>

  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Dropdown button
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
  </div>


  <div class="nav-item">
    <a class="nav-divnk text-dark" href="#" data-toggle="dropdown">
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
  </div>

@endsection