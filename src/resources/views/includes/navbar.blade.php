<nav class="mx-5 my-5 navbar navbar-expand-sm navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" >
            <img src="{{ asset('img/logo-new.png') }}"  width="280" height="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="mx-5 navbar-nav ms-auto">
            <li class="mx-5 nav-item">
            <a class="nav-link" href="javascript:void(0)">Beranda</a>
            </li>
            <li class="mx-5 nav-item">
            <a class="nav-link" href="javascript:void(0)">Buku Tamu</a>
            </li>
            <li class="mx-5 nav-item">
            <a class="nav-link" href="{{ route('admin') }}">Pustakawan</a>
            </li>
        </ul>
        <form class="d-flex">
            <button class="btn btn-info" type="button">Login</button>
        </form>
        </div>
    </div>
    </nav>