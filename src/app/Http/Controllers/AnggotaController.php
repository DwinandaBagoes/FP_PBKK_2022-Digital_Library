<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
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
    public function anggota()
    {
        $anggota = Anggota::latest()->get();
        return view('admin.anggota', compact('anggota'));
    }
    
    public function tambahAnggota()
    {
        
        return view('admin.tambahAnggota');
    }

    public function simpanAnggota(Request $request)
    {  
        Anggota::create($request->all());
        return redirect()->route('anggota');
    }

    public function hapusAnggota(Anggota $anggota)
    {
        $anggota-> delete();
        return redirect()->back();
    }

    public function editAnggota(Anggota $anggota)
    {
        return view('admin.editAnggota', compact('anggota'));
    }

    public function updateAnggota(Anggota $anggota, Request $request)
    {
        $jquin = [
            'namaAnggota' => $request -> namaAnggota,
            'jenisKelamin' => $request -> jenisKelamin,
            'noTelp' => $request -> noTelp,
            'alamat' => $request -> alamat
        ];
        $anggota->update($jquin);
        return redirect()->route('anggota');
    }
}
