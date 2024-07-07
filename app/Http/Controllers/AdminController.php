<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\JadwalTanding;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    
    public function showProfile()
    {
        // Logika untuk menampilkan halaman profil admin
        return view('admin.admin');
    }
    // logika untuk mengisi Form
    public function storeJadwal(Request $request)
    {
        $request->validate([
            'hari_tanding' => 'required',
            'tanggal_tanding' => 'required',
            'nama_kompetisi' => 'required',
            'logo_tim_a' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo_tim_b' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $logo_tim_a = $request->file('logo_tim_a')->store('backend/club', 'public');
        $logo_tim_b = $request->file('logo_tim_b')->store('backend/club', 'public');

        JadwalTanding::create([
            'hari_tanding' => $request->hari_tanding,
            'tanggal_tanding' => $request->tanggal_tanding,
            'nama_kompetisi' => $request->nama_kompetisi,
            'logo_tim_a' => $logo_tim_a,
            'logo_tim_b' => $logo_tim_b,
        ]);

        return redirect()->route('admin.tambah_jadwal')->with('success', 'Jadwal berhasil ditambahkan.');
    }
    // Logika untuk CRUD pada data tabel
    public function showJadwal()
    {
        $jadwal = DB::table('jadwal_tanding')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.body.sidebar.jadwal_side', compact('jadwal'));
    }
    public function deleteJadwal($id)
    {
        $jadwal = JadwalTanding::find($id);
        if ($jadwal) {
            $jadwal->delete();
        }
        return redirect()->route('admin.jadwal_side')->with('success', 'Jadwal berhasil dihapus');
    }

    // untuk sidebar
    public function tambahJadwal()
    {
        return view('admin.body.sidebar.tambah_jadwal');
    }
    public function tambahGaleri()
    {
        return view('admin.body.sidebar.tambah_galeri');
    }
    public function jadwalSide()
    {
        return view('admin.body.sidebar.jadwal_side');
    }
}
