<?php

namespace App\Http\Controllers;

use App\Models\binaan;
use Illuminate\Http\Request;

class BinaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bnn = binaan::all();
       
        return view ('fitur.user.donasi.daftar-binaan', [
            'data' => $bnn
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
        return view('fitur.user.donasi.daftar-binaan.tambah', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new binaan;
        $data->id_binaan = $request->id_binaan;
        $data->nama_binaan = $request->nama_binaan;
        $data->ttl = $request->ttl;
        $data->jekel = $request->jekel;
        $data->pendidikan = $request->pendidikan;
        $data->umur = $request->umur;
        $data->kelas = $request->kelas;
        $data->status = $request->status;
        $data->save();

        return redirect('binaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\binaan  $binaan
     * @return \Illuminate\Http\Response
     */
    public function show(binaan $binaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\binaan  $binaan
     * @return \Illuminate\Http\Response
     */
    public function edit(binaan $binaan)
    {
        $model = binaan::find($id);
        return view('fitur.admin.donasi.daftar-binaan', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\binaan  $binaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, binaan $binaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\binaan  $binaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(binaan $binaan)
    {
        //
    }
}
