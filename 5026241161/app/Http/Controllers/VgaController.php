<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VgaController extends Controller
{
    public function indexVga()
    {
        $data = DB::table('vga')->get();
        return view('indexVga', ['data' => $data]);
    }

    public function tambahVga()
    {
        return view('tambahVga');
    }

    public function storeVga(Request $request)
    {
        DB::table('vga')->insert([
            'merkvga'  => $request->merkvga,
            'stockvga' => $request->stockvga,
            'tersedia' => $request->tersedia,
        ]);
        return redirect('/vga');
    }

    public function hapusVga($id)
    {
        DB::table('vga')->where('kodevga', $id)->delete();
        return redirect('/vga');
    }
}
