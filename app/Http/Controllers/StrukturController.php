<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $struktur = Struktur::all();
       
        return view ('fitur.user.profil.struktur', [
            'data' => $struktur
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Struktur;
        return view('admin.profil.struktur.tambah', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //melakukan validasi data
         $request->validate([
            'name' => 'required',
            'jabatan' => 'required',
        ]);

        $data = new Struktur;
        $data->name = $request->name;
        $data->jabatan = $request->jabatan;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect()->route('struktur.index')->with('success', 'Data Struktur Kepengurusan Berhasil Ditambahkan');
        

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function show(Struktur $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Struktur::find($id);
        return view('admin.profil.struktur.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //melakukan validasi data
         $request->validate([
            'name' => 'required',
            'jabatan' => 'required',
        ]);

        $data = Struktur::find($id);
        $data->name = $request->name;
        $data->jabatan = $request->jabatan;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect()->route('struktur.index')->with('success', 'Data Struktur Kepengurusan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Struktur::find($id);
        $data->delete();
        return redirect()->route('struktur.index')->with('success', 'Data Struktur Kepengurusan Berhasil Dihapus');
    }
}
