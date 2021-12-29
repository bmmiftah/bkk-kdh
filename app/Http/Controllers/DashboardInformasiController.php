<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Informasi;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardInformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('dashboard.informasi.index', [
            'informasis' => Informasi::all(),
            'title' => "Informasi"
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perusahaan = Perusahaan::all();
        $category = Category::all();

        return view('dashboard.informasi.create', [
            'categories' => $category,
            'perusahaans' => $perusahaan,
            'title' => "Informasi"
        ]);

        // $validatedData['excerpt'] = Str::limit(strip_tags($request->isi_informasi), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title_informasi' => 'required|max:255',
            'slug' => 'required|unique:informasis',
            'category_id' => 'required',
            'isi_informasi' => 'required'
        ]);
        

        // $validatedData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->isi_informasi), 200);

        Informasi::create($validateData);

        return redirect('/dashboard/informasi')->with('success', 'Informasi Baru telah ditambahkan!');
        


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function show(Informasi $informasi)
    {
        return view('dashboard.informasi.show', [
            'informasi' =>$informasi,
            'title' => "Informasi"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasi $informasi)
    {
        $category = Category::all();
        $perusahaans = Perusahaan::all();


        
        return view('dashboard.informasi.edit', [
            'informasi' => $informasi,
            'categories' => $category,
            'perusahaans' => $perusahaans,
            'title' => "Informasi"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasi $informasi)
    {
        $rules = [
            'title_informasi' => 'required|max:255',
            'category_id' => 'required',
            'isi_informasi' => 'required'
        ];

        if ($request->slug != $informasi->slug) {
            $rules['slug'] = 'required|unique:informasis';
        }

        $validatedData = $request->validate($rules);

        $validatedData['perusahaan_id'] = $request->perusahaan_id;

        $validatedData['excerpt'] = Str::limit(strip_tags($request->isi_informasi), 200);

        Informasi::where('id', $informasi->id)->update($validatedData);

        return redirect('/dashboard/informasi')->with('success', 'Informasi telah terupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasi $informasi)
    {
        Informasi::destroy($informasi->id);

        return redirect('/dashboard/informasi')->with('success', 'Informasi telah dihapus!');
    }


    public function checkSlug(Request $request)             
    {
        $slug = SlugService::createSlug(Informasi::class, 'slug', $request->title_informasi);

        return response()->json(['slug' => $slug]);
    }

}
