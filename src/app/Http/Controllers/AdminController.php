<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
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
    public function admin()
    {
        return view('admin.beranda');
    }

    public function peminjaman()
    {
        return view('admin.peminjaman');
    }

    public function laporan()
    {
        return view('admin.laporan');
    }
}
