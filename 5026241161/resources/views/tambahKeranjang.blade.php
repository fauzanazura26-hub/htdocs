<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pembelian</title>
</head>
<body>
    <h2>Form Beli Barang</h2>
    <form action="/keranjang/store" method="POST">
        @csrf
        <table>
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="KodeBarang"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="Jumlah"></td>
            </tr>
            <tr>
                <td>Harga per item</td>
                <td><input type="text" name="Harga"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
