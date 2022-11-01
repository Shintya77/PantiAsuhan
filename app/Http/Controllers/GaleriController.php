<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::all();
       
        return view ('fitur.user.galeri', [
            'data' => $galeri
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Galeri;
        return view('fitur.admin.profil.galeri.tambah', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        if ($request->file('gambar')){
            $image_name = $request->file('gambar')->store('galeri', 'public');
        }

        $model = new Galeri;
        $model->gambar= $image_name;

        $model->save();
        return redirect('galeri');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Galeri::find($id);
        return view('fitur.admin.profil.galeri.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Galeri::find($id);
        if ($model->gambar && file_exists(storage_path('app/public/'.$model->galeri))){
            \Storage::delete('public/'. $model->galeri);
        }
        $image_name = $request->file('gambar')->store('galeri', 'public');
        $model->gambar = $image_name;

        $model->save();
        return redirect('galeri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Galeri::find($id);
        $model->delete();
        return redirect('galeri');
    }
}
