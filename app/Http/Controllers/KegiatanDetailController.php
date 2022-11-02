<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KegiatanDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = Kegiatan::all();
       
        return view ('fitur.user.kegiatanDetail', [
            'data' => $kegiatan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kegiatan = new Kegiatan;
        return view('fitur.admin.profil.kegiatan.tambah', compact('kegiatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('foto')){
            $image_name = $request->file('foto')->store('foto', 'public');
        }

        $kegiatan = new Kegiatan;
        $kegiatan->foto = $image_name;
        $kegiatan->judul = $request->judul;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->save();

        return redirect('kegiatan');
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
        $kegiatan = Kegiatan::find($id);
        return view('fitur.admin.profil.kegiatan.edit', compact('kegiatan'));
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
        $kegiatan = Kegiatan::find($id);
        if ($kegiatan->foto && file_exists(storage_path('app/public/'.$kegiatan->foto))){
            \Storage::delete('public/'. $kegiatan->foto);
        }

        $image_name = $request->file('foto')->store('foto', 'public');

        $kegiatan->name = $request->name;
        $kegiatan->judul = $image_name;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->save();

        return redirect('kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kegiatan::find($id);
        $data->delete();
        return redirect('kegiatan');
    }
}
