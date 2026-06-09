    @extends('template')

    @section('title', 'Data Pegawai')

    @section('konten')
<body>
    <h2>Tambah Data Nilai Kuliah</h2>

<div class="container mt-4" style="max-width: 500px;">
    <h5 class="mb-3">Form Tambah Nilai</h5>
    <form action="/nilaikuliah/store" method="POST">
        @csrf
        <div class="mb-3">
            <label>NRP</label>
            <input type="text" name="NRP" class="form-control" maxlength="10">
        </div>
        <div class="mb-3">
            <label>Nilai Angka</label>
            <input type="text" name="NilaiAngka" class="form-control">
        </div>
        <div class="mb-3">
            <label>SKS</label>
            <input type="text" name="SKS" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/nilaikuliah" class="btn btn-secondary ms-2">Kembali</a>
    </form>
</div>
    @endsection
