<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        // Jika belum ada data siswa di database, buat contoh data default
        if (Siswa::count() == 0) {
            Siswa::create([
                'nama' => 'Dila Lala',
                'nis' => '2025001',
                'kelas' => 'XI RPL 1',
                'alamat' => 'Jl. Mawar No. 5',
                'tanggal_lahir' => '2007-05-14',
            ]);

            Siswa::create([
                'nama' => 'Aulia Rahma',
                'nis' => '2025002',
                'kelas' => 'XI RPL 1',
                'alamat' => 'Jl. Melati No. 7',
                'tanggal_lahir' => '2007-03-22',
            ]);
        }

        $siswas = Siswa::all();
        return view('siswa', compact('siswas'));
    }

    public function create()
    {
        return view('create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
        ]);

        Siswa::create($request->all());

        return redirect()->route('sekolah.siswa')->with('success', 'Data siswa berhasil ditambahkan!');
    }
}
