<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function home()
    {
        return view('frontend.index');
    }

    public function profil()
    {
        return view('frontend.features.profil');
    }

    public function berita()
    {
        return view('frontend.features.berita');
    }

    public function galeri()
    {
        return view('frontend.features.galeri');
    }

    public function jadwal()
    {
        return view('frontend.features.jadwal');
    }

    public function info()
    {
        return view('frontend.features.info');
    }
}

