
    @extends('template')

    @section('title', 'Data VGA')

    @section('konten')
<div class="container mt-4">
    <a href="/vga/tambah">
        <button class="btn btn-primary mb-3">+ Tambah Data</button>
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode VGA</th>
                <th>Merk VGA</th>
                <th>Stock VGA</th>
                <th>Tersedia</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->kodevga }}</td>
                <td>{{ $item->merkvga }}</td>
                <td>{{ $item->stockvga }}</td>
                <td>{{ $item->tersedia }}</td>
                <td>
                    <a href="/vga/hapus/{{ $item->kodevga }}">
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    @endsection
