
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
        <a class="navbar-brand" href="#">Ecommerce</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                <span class="badge badge-pill bg-danger">1</span>
            </a>
          </li>
        </ul>
        <form class="d-flex input-group w-auto">
          <input type="search" class="form-control" placeholder="Type query" aria-label="Search" />
          <button class="btn btn-outline-light" type="button" data-mdb-ripple-color="dark">
            Search
          </button>
        </form>
        
      </div>
    </div>
  </nav>
</div>