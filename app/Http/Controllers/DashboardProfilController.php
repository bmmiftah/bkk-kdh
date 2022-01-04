<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as auth;

class DashboardProfilController extends Controller
{
    public function index(User $user)
    {
        
        return view('DashboardProfil.index', [
            'user' => User::findOrFail(auth::id()),
            'title' => 'My Profil'
        ]);
    }

    public function edit(User $user)
    {
        dd(Profil::findOrFail(auth::id()));
        return view('DashboardProfil.personal.edit', [
            'user' => User::findOrFail(auth::id()),
            'profil' => Profil::findOrFail(auth::id()),
            'title' => "Edit Profil"
        ]);
    }
}
