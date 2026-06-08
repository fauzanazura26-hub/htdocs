<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    // Halaman Index
    public function indexKeranjang()
{
    $data = DB::table('keranjangbelanja')->get();
    return view('indexKeranjang', ['data' => $data]);
}

public function tambahKeranjang()
{
    return view('tambahKeranjang');
}

public function storeKeranjang(Request $request)
{
    DB::table('keranjangbelanja')->insert([
        'KodeBarang' => $request->KodeBarang,
        'Jumlah'     => $request->Jumlah,
        'Harga'      => $request->Harga,
    ]);
    return redirect('/keranjang');
}

public function hapusKeranjang($id)
{
    DB::table('keranjangbelanja')->where('ID', $id)->delete();
    return redirect('/keranjang');
}

    // Hapus data
    public function hapus($id)
    {
        DB::table('keranjangbelanja')->where('ID', $id)->delete();
        return redirect('/keranjang');
    }
}
