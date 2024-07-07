<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalTanding;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = JadwalTanding::all();
        return view('frontend.features.jadwal', compact('jadwal'));
    }
    
}
