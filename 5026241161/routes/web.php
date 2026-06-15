<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\VgaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\tagihanAirController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pert5', function () {
    return view('pertemuan5');
});

Route::get('pert1', function () {
    return view('pertemuan1');
});

Route::get('pert2', function () {
    return view('pertemuan2');
});

Route::get('pert3', function () {
    return view('pertemuan3');
});

Route::get('pert4', function () {
    return view('pertemuan4');
});

Route::get('pert5index', function () {
    return view('pertemuan5index');
});

Route::get('linktree', function () {
    return view('pertemuan5linktree');
});



Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud tabel pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);


Route::get('/keranjang', [KeranjangController::class, 'indexKeranjang']);
Route::get('/keranjang/tambah', [KeranjangController::class, 'tambahKeranjang']);
Route::post('/keranjang/store', [KeranjangController::class, 'storeKeranjang']);
Route::get('/keranjang/hapus/{id}', [KeranjangController::class, 'hapusKeranjang']);

//crud tabel nilai kuliah
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'indexNilai']);
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'tambahNilai']);
Route::post('/nilaikuliah/store', [NilaiKuliahController::class, 'storeNilai']);



Route::get('/vga', [VgaController::class, 'indexVga']);
Route::get('/vga/tambah', [VgaController::class, 'tambahVga']);
Route::post('/vga/store', [VgaController::class, 'storeVga']);
Route::get('/vga/hapus/{id}', [VgaController::class, 'hapusVga']);

Route::get('/siswa', [SiswaController::class, 'indexSiswa'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'createSiswa'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'editSiswa'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::get('/eas', [TagihanAirController::class, 'indexTagihan']);
Route::get('/eas/tambah', [TagihanAirController::class, 'tambahTagihan']);
Route::post('/eas/store', [TagihanAirController::class, 'storeTagihan']);
Route::get('/eas/hapus/{id}', [TagihanAirController::class, 'hapusTagihan']);
