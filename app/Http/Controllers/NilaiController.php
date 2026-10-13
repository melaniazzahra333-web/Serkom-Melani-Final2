<?php

namespace App\Http\Controllers;

// Mengambil fitur Request untuk menerima data dari form
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        return view('landing.nilai'); //menampilkan halaman
    }

    // Fungsi untuk memproses nilai yang dikirim dari form
    public function hitung(Request $request)
    {
        // Memeriksa apakah kedua nilai diisi, berupa angka,
        // dan berada dalam rentang 0 sampai 100
        $request->validate([
            'nilai1' => 'required|numeric|min:0|max:100',
            'nilai2' => 'required|numeric|min:0|max:100',
        ]);

        // Mengambil nilai pertama dan nilai kedua dari form
        $nilai1 = $request->nilai1;
        $nilai2 = $request->nilai2;

        $rataRata = ($nilai1 + $nilai2) / 2; //menghitung rata rata dari kedua nilai

        // Menentukan status berdasarkan hasil rata-rata
        // Jika lebih dari 70, hasilnya LULUS
        if ($rataRata > 70) {
            $status = 'LULUS';
        } else {
            // Jika 70 atau kurang, hasilnya TIDAK LULUS
            $status = 'TIDAK LULUS';
        }

        // Mengirim nilai dan hasil perhitungan ke halaman Blade
        return view('landing.nilai', compact(
            'nilai1',
            'nilai2',
            'rataRata',
            'status'
        ));
    }
}