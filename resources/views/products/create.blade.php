<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow-lg p-4 rounded-4">
        <h2 class="text-center mb-4">🧴 Tambah Data Produk Skincare</h2>

        {{-- Form Tambah Produk --}}
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="nama" class="form-control" placeholder="Contoh: Serum Vitamin C" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" placeholder="Contoh: 75000" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stok" class="form-control" placeholder="Contoh: 20" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="3" placeholder="Contoh: Serum untuk mencerahkan kulit dan melembapkan wajah" required></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary px-5">Simpan</button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary px-5">Kembali</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
