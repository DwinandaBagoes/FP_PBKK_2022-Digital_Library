<header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
      <img src="{{ asset('img/logo-new.png') }}"  width="210" height="75">
  </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">admin</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse " >
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
              Beranda
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#collection"/></svg>
              Buku
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
              Anggota
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
              Peminjaman
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
              Laporan
            </a>
          </li>
          
        </ul>

        
      </div>
    </nav>