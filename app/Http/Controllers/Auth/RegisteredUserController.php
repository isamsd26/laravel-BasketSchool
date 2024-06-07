<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string', 'in:siswa,pelatih,admin'], // Pastikan memvalidasi peran
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role, // Simpan peran pengguna
        ]);

        event(new Registered($user));

        Auth::login($user);

        // Tentukan URL tujuan berdasarkan peran pengguna
        $redirectRoute = RouteServiceProvider::HOME;

        if ($user->role === 'siswa') {
            $redirectRoute = RouteServiceProvider::SISWA_HOME;
        } elseif ($user->role === 'pelatih') {
            $redirectRoute = RouteServiceProvider::PELATIH_HOME;
        } elseif ($user->role === 'admin') {
            $redirectRoute = RouteServiceProvider::HOME;
        }

        return redirect($redirectRoute);
    }
}
