<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 🧴 Tampilkan semua produk
    public function index()
    {
        // Jika tabel kosong, tambahkan contoh data
        if (Product::count() == 0) {
            Product::insert([
                ['nama' => 'Serum Vitamin C', 'harga' => 85000, 'stok' => 20, 'deskripsi' => 'Mencerahkan wajah'],
                ['nama' => 'Toner Aloe Vera', 'harga' => 45000, 'stok' => 30, 'deskripsi' => 'Memberi kesegaran kulit'],
                ['nama' => 'Moisturizer Collagen', 'harga' => 95000, 'stok' => 15, 'deskripsi' => 'Melembapkan kulit'],
            ]);
        }

        // ✅ Ambil semua data produk
        $produk = Product::all();

        // ✅ Kirim ke view (gunakan nama folder sesuai dengan view kamu)
        return view('products.index', compact('produk'));
    }

    // ➕ Form tambah produk
    public function create()
    {
        return view('products.create');
    }

    // 💾 Simpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'deskripsi' => 'nullable|string',
        ]);

        Product::create($request->all());

        // ✅ Arahkan kembali ke halaman daftar produk
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    // ✏️ Form edit produk
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        // ✅ Perbaikan: gunakan compact('product'), bukan 'products'
        return view('products.edit', compact('product'));
    }

    // 🔁 Update produk
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'deskripsi' => 'nullable|string',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        // ✅ Kembali ke daftar produk
        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui!');
    }

    // 🗑️ Hapus produk
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
    }
}
