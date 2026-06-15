
    @extends('template')

    @section('title', 'Data Tagihan Air')

    @section('konten')
<center>
<title>Tagihan Air</title>
<body>
    <h2>Data Tagihan Air</h2>
    <div class="container mt-4">
    <a href="/eas/tambah">
        <button class="btn btn-success mb-3">Input Tagihan Baru</button>
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>No Meteran</th>
                <th>Penggunaan</th>
                <th>Total Tagihan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            @php
                $pengunaan = $item->MeterAkhir - $item->MeterAwal;
                $total = $pengunaan * 5000;
            @endphp
            <tr>
                <td>{{ $item->ID }}</td>
                <td>{{ $item->NoMeteran }}</td>
                <td>{{ $pengunaan }}</td>
                <td>Rp {{ number_format($total, 0, ',', '.') }}</td>
                <td>
                    <a href="/eas/hapus/{{ $item->ID }}">
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
