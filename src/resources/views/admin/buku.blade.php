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
                <a href="daftar.html" class="btn btn-primary mb-2 float-end">Tambah baru</a>
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
              <tbody id="listSiswa">
                 
              </tbody>
            </table>
          </div>
      </div>
  </div>
 
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Data Buku</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="form-edit">
          <div class="modal-body">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Buku" required>
              <label for="judul">Judul Buku</label>
            </div>
            <div class="mb-3">
              <label for="sampul" class="form-label">Foto Sampul</label>
              <input class="form-control" type="file" name="sampul" id="sampul" accept=".png, .jpg, .jpeg">
              <img src="" style="max-height: 100px; width: auto" id="previewImg">
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Pengarang" required>
              <label for="pengarang">Pengarang</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Penerbit" required>
              <label for="penerbit">Penerbit</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit" placeholder="Tahun Terbit" required>
              <label for="tahun_terbit">Tahun Terbit</label>
            </div>
            <div class="mb-3">
              <label for="file" class="form-label">File</label>
              <input class="form-control" type="file" name="file" id="file" accept=".pdf">
              <img src="" style="max-height: 100px; width: auto" id="previewImg">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary" id="edit-btn">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
@endsection