<nav class="navbar-1-1 navbar navbar-expand-lg sticky-top navbar-dark p-2 px-md-2 mb-0 shadow"
style="font-family: Poppins, sans-serif">
<div class="container">
  <a class="navbar-brand" href="/">BKK</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
    aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarToggler">
    <ul class="navbar-nav mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link px-md-4 {{ ($active === "home") ? 'active' : '' }}" aria-current="page" href="/">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-md-4 {{ ($active === "about") ? 'active' : '' }}" href="/about">Tentang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-md-4 {{ ($active === "lowongan") ? 'active' : '' }}"  href="/lowongan">Lowongan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-md-4 {{ ($active === "informasi") ? 'active' : '' }} " href="/informasi">Informasi</a>
      </li>
    </ul>
   
    <ul class="navbar-nav ms-auto">
      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welcome back, {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </form>
          </li>
        </ul>
      </li>
      @else
      <li class="nav-item">
        <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
      </li>
      {{-- <div class="d-flex">
        <a class="btn btn-login btn-login py-2 px-4 {{ ($active === "about") ? 'login' : '' }}" href="/login"><i class="bi bi-box-arrow-right"></i> Login</a>
      </div> --}}
    </ul>

  @endauth


    
  </div>
</div>
</nav>