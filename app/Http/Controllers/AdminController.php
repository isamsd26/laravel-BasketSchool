<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showProfile()
    {
        // Logika untuk menampilkan halaman profil admin
        return view('admin.admin');
    }
}
