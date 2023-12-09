<header>
    <!-- Navbar -->
    <nav data-mdb-navbar-init class="navbar navbar-expand-lg bg-body">
      <div class="container-fluid">
        <button
          data-mdb-collapse-init
          class="navbar-toggler"
          type="button"
          data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('create')}}">Thêm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Sửa</a>
            </li>
            
            <li class="nav-item">
              @if(!empty(Auth::check()))
                <div class="nav-link">
                    <span>{{Auth::user()->name}} - </span>
                    <a href="{{route('logout')}}">Logout</a>
                </div>
              @else <a href="{{route('login')}}" class="nav-link"><i class="icon-user"></i>Login</a>
              @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
  </header>