<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
      
        $dataMessage = $request->message ?? "Berikut adalah daftar buku populer Indonesia 📚";

        $books = [
            [
                'judul' => 'Laskar Pelangi',
                'pengarang' => 'Andrea Hirata',
                'tahun' => 2005
            ],
            [
                'judul' => 'Bumi Manusia',
                'pengarang' => 'Pramoedya Ananta Toer',
                'tahun' => 1980
            ],
            [
                'judul' => 'Negeri 5 Menara',
                'pengarang' => 'Ahmad Fuadi',
                'tahun' => 2009
            ],
            [
                'judul' => 'Dilan 1990',
                'pengarang' => 'Pidi Baiq',
                'tahun' => 2014
            ],
            [
                'judul' => 'Koala Kumal',
                'pengarang' => 'Raditya Dika',
                'tahun' => 2015
            ]
        ];

    
        return view('home', compact('books', 'dataMessage'));
    }
}
