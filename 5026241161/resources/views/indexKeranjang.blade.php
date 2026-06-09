
    @extends('template')

    @section('title', 'Data Pegawai')

    @section('konten')
    <h2>Keranjang Belanja</h2>
    <div class="container mt-4">
    <a href="/keranjang/tambah">
        <button class="btn btn-primary mb-3">+ Tambah Baru</button>
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th>Tambah</th>
                <th>Batal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->ID }}</td>
                <td>{{ $item->KodeBarang }}</td>
                <td>{{ $item->Jumlah }}</td>
                <td>Rp {{ number_format($item->Harga, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/keranjang/tambah">
                        <button class="btn btn-success btn-sm">Beli</button>
                    </a>
                </td>
                <td>
                    <a href="/keranjang/hapus/{{ $item->ID }}">
                        <button class="btn btn-danger btn-sm">Batal</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    @endsection
