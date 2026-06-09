<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function indexNilai()
    {
        $data = DB::table('nilaikuliah')->get();
        return view('indexNilai', ['data' => $data]);
    }

    public function tambahNilai()
    {
        return view('tambahNilai');
    }

    public function storeNilai(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'NRP'        => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS'        => $request->SKS,
        ]);
        return redirect('/nilaikuliah');
    }   
}
