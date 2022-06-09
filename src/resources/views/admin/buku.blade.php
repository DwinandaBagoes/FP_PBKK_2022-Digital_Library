@extends('layouts.admin')

@section('title', 'Admin - Buku')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="pt-3 pb-2 mb-3 container">
      <div class="row">
          <div class="col-md-12">
            <div class="row mb-3 border-bottom">
              <div class="col-sm-6">
                <h1 class="h2">Buku</h1>
              </div>
              <div class="col-sm-6 float-end">
                <a href="{{ route('tambahBuku') }}" class="btn btn-primary mb-2 float-end">Tambah baru</a>
              </div>
            </div>
            
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul Buku</th>
                  <th scope="col">Foto Sampul</th>
                  <th scope="col">Pengarang</th>
                  <th scope="col">Penerbit</th>
                  <th scope="col">Tahun Terbit</th>
                  <th scope="col">File</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody id="listBuku">
                @forelse($buku as $vk)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $vk->judulBuku }}</td>
                  <td>
                    <img src="{{ asset('img/'.$vk->fotoSampul) }}" style="width: 100px;">
                  </td>
                  <td>{{ $vk->pengarang }}</td>
                  <td>{{ $vk->penerbit }}</td>
                  <td>{{ $vk->tahunTerbit }}</td>
                  <td>
                    <a href="{{ asset('buku/'.$vk->fileBuku) }}" target="_blank">baca {{ $vk->judulBuku }}</a>
                  </td>
                  <td>
                    <a href="{{ route('editBuku', $vk->id) }}"
                      <button type="button" class="btn btn-primary btn-sm">Edit</button>&nbsp;
                    </a>
                    <a href="{{ route('hapusBuku', $vk->id) }}"
                      <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus buku {{ $vk->judulBuku }}')">Hapus</button>
                    </a>
                    </td>
                </tr>
                @empty
                <tr>
                  <td><b><i>Data tidak ada</i></b></td>
                </tr>
                @endforelse
              </tbody>
            </table>

          </div>
      </div>
  </div>
</main>
@endsection