<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use DB;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku')->insert([
            'judulBuku' => 'Kambing Jantan',
            'fotoSampul' => 'path',
            'pengarang' => 'Raditya Dika',
            'penerbit' => 'tes123',
            'fileBuku' => 'pathBuku',
            'tahunTerbit' => 2013
        ]);
    }
}
