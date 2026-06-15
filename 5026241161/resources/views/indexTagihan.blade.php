@extends('template')

@section('title', 'Kode Soal tagihan_air')

@section('konten')

    <a href="/eas/tambah">
        <button class="btn btn-success mb-3">Input Tagihan Baru</button>
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>No Meteran</th>
                <th>Penggunaan (m³)</th>
                <th>Total Tagihan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            @php
                $penggunaan = $item->MeterAkhir - $item->MeterAwal;
                $total = $penggunaan * 5000;
            @endphp
            <tr>
                <td>{{ $item->ID }}</td>
                <td>{{ $item->NoMeteran }}</td>
                <td>{{ $penggunaan }}</td>
                <td>Rp {{ number_format($total, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
