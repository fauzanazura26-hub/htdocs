    @extends('template')

    @section('title', 'Data Tagihan Air')

    @section('konten')
<body>
    <h2>Tambah Data Tagihan</h2>

<div class="container mt-4" style="max-width: 500px;">
    <h5 class="mb-3">Form Tambah Tagihan</h5>
    <form action="/eas/store" method="POST">
        @csrf
        <div class="row mb-3 align-items-center">
            <label class="col-sm-3 col-form-label">No Meteran</label>
            <div class="col-sm-6">
                <input type="text" name="NoMeteran" id="NoMeteran" class="form-control" maxlength="6">
            </div>
        </div>
        <div class="row mb-3 align-items-center">
            <label class="col-sm-3 col-form-label">Meter Awal</label>
            <div class="col-sm-6">
                <input type="text" name="MeterAwal" id="MeterAwal" class="form-control">
            </div>
        </div>
        <div class="row mb-3 align-items-center">
            <label class="col-sm-3 col-form-label">Meter Akhir</label>
            <div class="col-sm-6">
                <input type="text" name="MeterAkhir" id="MeterAkhir" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/eas" class="btn btn-secondary ms-2">Kembali</a>
    </form>
</div>

<script>
    document.getElementById('formTagihan').addEventListener('submit', function(e) {
        const awal   = document.getElementById('MeterAwal').value;
        const akhir  = document.getElementById('MeterAkhir').value;
        const errDiv = document.getElementById('errorMsg');

        if (isNaN(awal) || awal === '' || isNaN(akhir) || akhir === '') {
            e.preventDefault();
            errDiv.classList.remove('d-none');
            errDiv.textContent = '⚠️ Meter Awal dan Meter Akhir harus berupa angka!';
            return;
        }

        if (parseInt(akhir) <= parseInt(awal) + 20) {
            e.preventDefault();
            errDiv.classList.remove('d-none');
            errDiv.textContent = '⚠️ Meter Akhir harus lebih besar dari Meter Awal + 20!';
            return;
        }
    });
</script>
    @endsection
