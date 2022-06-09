@extends('layouts.admin')

@section('title', 'Admin - Anggota')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="pt-3 pb-2 mb-3 container">
      <div class="row">
          <div class="col-md-12">
            <div class="row mb-3 border-bottom">
              <div class="col-sm-6">
                <h1 class="h2">Anggota</h1>
              </div>
              <div class="col-sm-6 float-end">
                <a href="{{ route('tambahAnggota') }}" class="btn btn-primary mb-2 float-end">Tambah baru</a>
              </div>
            </div>
            
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Anggota</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">No Telp</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody id="listAnggota">
                @forelse($anggota as $vk)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $vk->namaAnggota }}</td>
                  <td>{{ $vk->jenisKelamin }}</td>
                  <td>{{ $vk->noTelp }}</td>
                  <td>{{ $vk->alamat }}</td>
                  <td>
                    <a href="{{ route('editAnggota', $vk->id) }}"
                      <button type="button" class="btn btn-primary btn-sm">Edit</button>&nbsp;
                    </a>
                    <a href="{{ route('hapusAnggota', $vk->id) }}"
                      <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus anggota {{ $vk->namaAnggota }}')">Hapus</button>
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