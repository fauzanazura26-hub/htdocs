<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagihanAirController extends Controller
{
    public function indexTagihan()
    {
        $data = DB::table('tagihan_air')->get();
        return view('indexTagihan', ['data' => $data]);
    }

    public function tambahTagihan()
{
    return view('tambahTagihan');
}

    public function storeTagihan(Request $request)
    {
        DB::table('tagihan_air')->insert([
            'NoMeteran' => $request->NoMeteran,
            'MeterAwal' => $request->MeterAwal,
            'MeterAkhir' => $request->MeterAkhir,
        ]);
        return redirect('/eas');
    }

    public function hapusTagihan($id)
    {
        DB::table('tagihan_air')->where('ID', $id)->delete();
        return redirect('/eas');
    }
}
