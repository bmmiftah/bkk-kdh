<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardProfilController extends Controller
{
    public function index(User $user)
    {
        
        return view('DashboardProfil.index', [
            'user' => $user,
            'title' => 'My Profil'
        ]);
    }
}
