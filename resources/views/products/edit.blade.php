<h2>Edit Produk</h2>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama:</label>
    <input type="text" name="nama" value="{{ $product->nama }}" required><br><br>

    <label>Harga:</label>
    <input type="number" name="harga" value="{{ $product->harga }}" required><br><br>

    <label>Stok:</label>
    <input type="number" name="stok" value="{{ $product->stok }}" required><br><br>

    <label>Deskripsi:</label>
    <textarea name="deskripsi">{{ $product->deskripsi }}</textarea><br><br>

    <button type="submit">Simpan Perubahan</button>
</form>
