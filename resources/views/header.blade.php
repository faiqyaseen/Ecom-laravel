<?php
  use App\Http\Controllers\ProductController;
  $total = 0;
  if(Session::has('user')){
    $total = ProductController::cartItem();
  }
 
?>
  <div class="mb-5">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="position: fixed; width: 100%; z-index: 1; top: 0">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="/">Ecommerce</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Orders</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"
              >Disabled</a
            >
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="#">
                <span><i class="fas fa-shopping-cart"></i></span>
                <span class="badge badge-pill bg-danger">{{$total}}</span>
            </a>
          </li>
        </ul>
        <form action="/search" class="input-group w-auto">
          <input type="search" style="width: 400px" name="query" class="form-control" placeholder="Search Here" aria-label="Search" />
          <button type="submit" class="btn btn-success me-3" type="button" data-mdb-ripple-color="dark">
            Search
          </button>
        </form>
        {{-- <div class="d-flex align-items-center">
          @if (Session::has('user'))
            <button type="button" class="btn btn-primary px-3 me-2">
              Logout
            </button>
          @else
            <button type="button" class="btn btn-primary px-3 me-2">
              Login
            </button>
          @endif
          
          <button type="button" class="btn btn-primary me-3">
            Sign up for free
          </button>
        </div> --}}
        <div class="d-flex align-items-center">
          <button type="button" class="btn btn-primary me-3">
            Sign up for free
          </button>
          @if (Session::has('user'))
          <ul class="navbar-nav">
            <!-- Dropdown -->
            <li class="nav-item dropdown">
              <a
                class="text-white nav-link dropdown-toggle"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
                {{Session::get('user')['name']}}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="/logout">Logout</a>
                </li>
              </ul>
            </li>
          </ul>
          @else
          <a href="/login">
            <button type="button" class="btn btn-primary px-3 me-2">
              Login
            </button>
          </a>
          
        </div>
            
        @endif
        

      </div>
    </div>
  </nav>
</div>