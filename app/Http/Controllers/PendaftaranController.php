<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\Pendaftaran;
use App\Models\Perusahaan;
use App\Models\User;
use App\Models\Vaksin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as auth;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lowongans = Lowongan::all();
        $vaksin = Vaksin::all();      
        

        return view('pendaftaran', [
            'user' => User::findOrFail(auth::id()),
            'lowongan' => $lowongans,
            'vaksins' => $vaksin,
            'title' => "Pendaftaran",
            'no_tes' => mt_rand(10000000,99999999),
        ]);
    }

    public function create()
    {
        // $user = User::findOrFail(auth::id());
        // if (Pendaftaran::class) {
        //     # code...
        // }

        $lowongans = Lowongan::all();
        $vaksin = Vaksin::all();      
        

        return view('pendaftaran', [
            'user' => User::findOrFail(auth::id()),
            'lowongan' => $lowongans,
            'vaksins' => $vaksin,
            'title' => "Pendaftaran",
            'no_tes' => mt_rand(10000000,99999999),
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
        // dd($request);
        $validateData = $request->validate([
            'user_id' => 'required',
            'lowongan_id' => 'required',
            'no_tes' => 'required',
            'nama_lengkap' => 'required',
            'foto_diri' => 'required',
            'nik' => 'required|max:16',
            'tanggal_lahir' => 'required',
            'nama_sekolah' => 'required',
            'nik' => 'required',
            'email' => 'required',
            'ukuran_baju' => 'required',
            'ukuran_celana' => 'required',
            'ukuran_sepatu' => 'required',
            'jenis_vaksin_1' => 'required',
            'tgl_vaksin_1' => 'required',
            'kota_vaksin_1' => 'required',
            'jenis_vaksin_2' => 'required',
            'tgl_vaksin_2' => 'required',
            'kota_vaksin_2' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
        
        ]);

        $validateData['img_bukti_1'] = $request['img_bukti_1'];
        $validateData['img_bukti_2'] = $request['img_bukti_2'];

        // dd($validateData);

        

        Pendaftaran::create($validateData);



        return redirect('/profil')->with('success', 'Pendaftaran Berhasil!');
    }

}
