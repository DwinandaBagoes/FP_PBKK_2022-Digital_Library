<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function buku()
    {
        $buku = Buku::latest()->get();
        return view('admin.buku', compact('buku'));
        // return view('admin.buku');
    }
    public function tambahBuku()
    {
        
        return view('admin.tambahBuku');
    }

    public function store(Request $request)
    {
        $jquin = [
            'judulBuku' => $request -> judulBuku,
            'fotoSampul' => $request -> fotoSampul,
            'pengarang' => $request -> pengarang,
            'penerbit' => $request -> penerbit,
            'fileBuku' => $request -> fileBuku,
            'tahunTerbit' => $request -> tahunTerbit
        ];
        Buku::create($jquin);
        return redirect()->route('buku');
    }

    public function hapusBuku(Buku $buku)
    {
        $buku-> delete();
        return redirect()->back();
    }

    public function editBuku(Buku $buku)
    {
        return view('admin.editBuku', compact('buku'));
    }

    public function updateBuku(Buku $buku, Request $request)
    {
        $jquin = [
            'judulBuku' => $request -> judulBuku,
            'fotoSampul' => $request -> fotoSampul,
            'pengarang' => $request -> pengarang,
            'penerbit' => $request -> penerbit,
            'fileBuku' => $request -> fileBuku,
            'tahunTerbit' => $request -> tahunTerbit
        ];
        $buku->update($jquin);
        return redirect()->route('buku');
    }
}
