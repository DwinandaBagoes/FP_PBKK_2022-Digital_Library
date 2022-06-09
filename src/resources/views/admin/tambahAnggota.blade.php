@extends('layouts.admin')

@section('title', 'Admin - TambahAnggota')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="pt-3 pb-2 mb-3 container">
      <div class="row">
          <div class="col-md-12">
            <div class="row mb-3 border-bottom">
              <div class="col-sm-6">
                <h1 class="h2">Tambah Anggota</h1>
              </div>
            </div>
            
            
          </div>
      </div>
  </div>
 
  <form id="form-edit" method="POST" action="{{ route('simpanAnggota')}}" enctype="multipart/form-data">
      @csrf
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="namaAnggota" id="namaAnggota" placeholder="nama Anggota" required>
        <label for="nama">Nama Anggota</label>
      </div>
      <div class="col-md-6">
          <label for="jenisKelamin">Jenis Kelamin</label>
          <select class="form-select form-floating mb-3" name="jenisKelamin" id="jenisKelamin" required>
            <option label="Pilih jenis kelamin" hidden></option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
          </select>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="noTelp" id="noTelp" placeholder="No Telp" required>
        <label for="noTelp">No Telp</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" placeholder="Alamat" name="alamat" id="alamat" required>
        <label for="alamat">Alamat</label>
      </div>
      <button id="submit-btn" type="submit" class="btn btn-primary w-100 pt-2 btn-block">Simpan</input>
    </form>
</main>
@endsection