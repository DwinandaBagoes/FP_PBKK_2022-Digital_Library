@extends('layouts.welcome')

@section('content')
<div class="row" id="content">
        <div class="col">
            <h4>Selamat Datang di</h4>
            <h1 class="text-info">Digital Library</h1>
            <p>Anda dapat mencari seluruh koleksi yang tersedia di perpustakaan kami</p>
            <div class="d-flex">
                <div class="p-2">
                    <form class="d-flex">
                        <a href="{{ route('listBuku') }}">
                            <button class="btn btn-info" type="button">Cari Buku</button>
                        </a>
                    </form>
                </div>
                <div class="p-2">
                    <form class="d-flex">
                            <button class="btn btn-light" type="button">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
        <img src="{{ asset('img/reading.jpg') }}"  width="500" height="349">
        </div>
    </div>
@endsection