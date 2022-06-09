@extends('layouts.admin')

@section('title', 'Admin - EditBuku')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="pt-3 pb-2 mb-3 container">
      <div class="row">
          <div class="col-md-12">
            <div class="row mb-3 border-bottom">
              <div class="col-sm-6">
                <h1 class="h2">Edit Buku</h1>
              </div>
            </div>
            
            
          </div>
      </div>
  </div>
 
  <form id="form-edit" method="POST" action="{{ route('updateBuku', $buku->id) }}" enctype="multipart/form-data">
      @csrf
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="judulBuku" id="judulBuku" placeholder="Judul Buku" value="<?php echo $buku->judulBuku; ?>" required>
        <label for="judul">Judul Buku</label>
      </div>
      <div class="mb-3">
        <label for="foto" class="form-label">Foto Sampul</label>
        <input class="form-control" type="file" name="fotoSampul" id="fotoSampul" accept=".png, .jpg, .jpeg" required>
        <img src="" style="max-height: 100px; width: auto" id="previewImg">
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Pengarang Buku" value="<?php echo $buku->pengarang; ?>" required>
        <label for="pengarang">Pengarang</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Penerbit Buku" value="<?php echo $buku->penerbit; ?>" required>
        <label for="penerbit">Penerbit</label>
      </div>
      <div class="form-floating mb-3">
        <input type="number" class="form-control" placeholder="Tahun Terbit Buku" name="tahunTerbit" id="tahunTerbit" value=<?php echo $buku->tahunTerbit; ?> required>
        <label for="tahun">Tahun Terbit</label>
      </div>
      <div class="mb-3">
        <label for="fileBuku" class="form-label">File Buku</label>
        <input class="form-control" type="file" name="fileBuku" id="fileBuku" accept=".pdf" required>
      </div>
      <button id="submit-btn" type="submit" class="btn btn-primary w-100 pt-2 btn-block">Simpan</input>
    </form>
</main>
@endsection