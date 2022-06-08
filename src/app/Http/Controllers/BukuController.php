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
        $data = Buku::create($request->all());
        if($request->hasFile('fotoSampul'))
        {
            $request->file('fotoSampul')->move('img/', $request->file('fotoSampul')->getClientOriginalName());
            $data->fotoSampul = $request->file('fotoSampul')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('buku');
    }

    public function hapusBuku(Buku $buku)
    {
        unlink('img/'. $buku->fotoSampul);
        $buku-> delete();
        return redirect()->back();
    }

    public function editBuku(Buku $buku)
    {
        return view('admin.editBuku', compact('buku'));
    }

    public function updateBuku(Buku $buku, Request $request)
    {
        unlink('img/'. $buku->fotoSampul);
        if($request->hasFile('fotoSampul'))
        {
            $request->file('fotoSampul')->move('img/', $request->file('fotoSampul')->getClientOriginalName());
            $request->fotoSampul = $request->file('fotoSampul')->getClientOriginalName();
        }
        $jquin = [
            'judulBuku' => $request -> judulBuku,
            'fotoSampul' => $request -> fotoSampul,
            'pengarang' => $request -> pengarang,
            'penerbit' => $request -> penerbit,
            'fileBuku' => $request -> fileBuku,
            'tahunTerbit' => $request -> tahunTerbit
        ];
        $data = $buku->update($jquin);
        return redirect()->route('buku');
    }
}
