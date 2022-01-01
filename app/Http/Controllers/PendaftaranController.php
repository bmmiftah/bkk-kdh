<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Perusahaan;
use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perusahaans = Perusahaan::all();
        $user = User::all();
        $profil = Profil::all();

        return view('pendaftaran.index', [
            'title' => 'Pendaftaran'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'lowongan_id' => 'required',
            'user_id' => 'required|unique',
            'no_tes' => 'required',
            'nik' => 'required|max:16|unique:profil',
            

        
        ]);
    }

}
