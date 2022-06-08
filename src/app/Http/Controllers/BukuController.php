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

        if($request->hasFile('fileBuku'))
        {
            $request->file('fileBuku')->move('buku/', $request->file('fileBuku')->getClientOriginalName());
            $data->fileBuku = $request->file('fileBuku')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('buku');
    }

    public function hapusBuku(Buku $buku)
    {
        unlink('img/'. $buku->fotoSampul);
        unlink('buku/'. $buku->fileBuku);
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
        unlink('buku/'. $buku->fileBuku);

        if($request->hasFile('fotoSampul'))
        {
            $request->file('fotoSampul')->move('img/', $request->file('fotoSampul')->getClientOriginalName());
            $request->fotoSampul = $request->file('fotoSampul')->getClientOriginalName();
        }

        if($request->hasFile('fileBuku'))
        {
            $request->file('fileBuku')->move('buku/', $request->file('fileBuku')->getClientOriginalName());
            $request->fileBuku = $request->file('fileBuku')->getClientOriginalName();
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
