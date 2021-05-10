<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function tambah(Request $request){
        DB::table('detail_pesanan')->insert([
            'nama' => $request->nama,
            'Alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'nama_produk' => $request->nama_product
        ]);

        return redirect('/');

    }
}
