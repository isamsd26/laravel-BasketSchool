<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all(); // Mengambil semua data siswa dari model Siswa
        return view('admin.admin', compact('siswa')); // Mengirimkan data siswa ke view dengan nama variabel $siswa
    }
    public function filter($kelompok_umur)
    {
        if ($kelompok_umur == 'SD') {
            $siswa = Siswa::whereBetween('kelompok_umur', [9, 12])->orderBy('kelompok_umur')->get();
        } elseif ($kelompok_umur == 'SMP') {
            $siswa = Siswa::whereBetween('kelompok_umur', [13, 15])->orderBy('kelompok_umur')->get();
        } elseif ($kelompok_umur == 'SMA') {
            $siswa = Siswa::whereBetween('kelompok_umur', [16, 18])->orderBy('kelompok_umur')->get();
        } else {
            $siswa = Siswa::all();
        }

        return response()->json($siswa);
    }
    public function jumlahSiswaByKelompokUmur($kelompok_umur)
    {
        $jumlah_sd = 0;
        $jumlah_smp = 0;
        $jumlah_sma = 0;

        if ($kelompok_umur == 'SD') {
            $jumlah_sd = Siswa::whereBetween('kelompok_umur', [9, 12])->count();
        } elseif ($kelompok_umur == 'SMP') {
            $jumlah_smp = Siswa::whereBetween('kelompok_umur', [13, 15])->count();
        } elseif ($kelompok_umur == 'SMA') {
            $jumlah_sma = Siswa::whereBetween('kelompok_umur', [16, 18])->count();
        } else {
            return response()->json(['error' => 'Invalid kelompok umur'], 400);
        }

        return view('admin.admin', compact('jumlah_sd', 'jumlah_smp', 'jumlah_sma'));
    }

}
