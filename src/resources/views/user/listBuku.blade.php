@extends('layouts.welcome')

@section('content')
<div id="content">
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
      </tr>
    </thead>
    <tbody id="listSiswa">
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
      </tr>
      @empty
      <tr>
        <td><b><i>Data tidak ada</i></b></td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection