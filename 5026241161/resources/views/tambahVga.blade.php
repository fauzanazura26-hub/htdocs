
    @extends('template')

    @section('title', 'Data VGA')

    @section('konten')

<div class="p-4 text-white" style="background-color: #3d6fe8;">
    <h4 class="mb-0 fw-bold">Fauzan Azura - 5026241161</h4>
    <small>Tambah Data VGA</small>
</div>

<div class="container mt-4" style="max-width: 500px;">
    <h5 class="mb-3">Form Tambah VGA</h5>
    <form action="/vga/store" method="POST">
        @csrf
        <div class="mb-3">
            <label>Merk VGA</label>
            <input type="text" name="merkvga" class="form-control" maxlength="30">
        </div>
        <div class="mb-3">
            <label>Stock VGA</label>
            <input type="text" name="stockvga" class="form-control">
        </div>
        <div class="mb-3">
            <label>Tersedia (Y/N)</label>
            <input type="text" name="tersedia" class="form-control" maxlength="1">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/vga" class="btn btn-secondary ms-2">Kembali</a>
    </form>
</div>

    @endsection
