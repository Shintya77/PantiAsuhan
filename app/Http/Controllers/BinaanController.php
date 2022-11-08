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
        $binaan = binaan::all();
        $title = 'Data Binaan';
        $paginate = binaan::orderBy('id_binaan', 'asc')->paginate(5);
        return view('admin.donasi.binaan.indexBinaan', compact('binaan','title','paginate'));

        // $bnn = binaan::all();
       
        // return view ('fitur.user.donasi.daftar-binaan', [
        //     'data' => $bnn
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Data Binaan';
        $binaan = new binaan;
        return view('admin.donasi.binaan.tambah', compact('title','binaan'));
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
            'nama_binaan' => 'required',
            'ttl' => 'required',
            'jekel' => 'required',
            'pendidikan' => 'required',
            'umur' => 'required',
            'kelas' => 'required',
            'status' => 'required',
        ]);

        $binaan = new binaan;
        $binaan->nama_binaan = $request->nama_binaan;
        $binaan->ttl = $request->ttl;
        $binaan->jekel = $request->jekel;
        $binaan->pendidikan = $request->pendidikan;
        $binaan->umur = $request->umur;
        $binaan->kelas = $request->kelas;
        $binaan->status = $request->status;
        $binaan->save();

        return redirect()->route('binaan.index')->with('success', 'Data Binaan Berhasil Ditambahkan');
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
    public function edit($id)
    {
        $binaan = binaan::all()->where('id_binaan', $id)->first();
        $title = 'Edit Data Binaan';
        return view('admin.donasi.binaan.edit', compact('binaan','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\binaan  $binaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'nama_binaan' => 'required',
            'ttl' => 'required',
            'jekel' => 'required',
            'pendidikan' => 'required',
            'umur' => 'required',
            'kelas' => 'required',
            'status' => 'required',
        ]);

        $binaan = binaan::where('id_binaan',$id)->first();
        $binaan->nama_binaan = $request->get('nama_binaan');
        $binaan->ttl = $request->get('ttl');
        $binaan->jekel = $request->get('jekel');
        $binaan->pendidikan = $request->get('pendidikan');
        $binaan->umur = $request->get('umur');
        $binaan->kelas = $request->get('kelas');
        $binaan->status = $request->get('status');
        $binaan->save();
        
        return redirect()->route('binaan.index')->with('success', 'Data Binaan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\binaan  $binaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        binaan::where('id_binaan',$id)->delete();
        return redirect()->route('binaan.index')-> with('success', 'Data Binaan Berhasil Dihapus');
    }
    public function cari(Request $request)
    {
        $keyword = $request->cari;
        $paginate = binaan::where('nama_binaan', 'like', '%' . $keyword . '%')->paginate(3);
        $paginate->appends(['keyword' => $keyword]);
        $title = 'Pencarian Data Daftar Binaan';
        return view('admin.donasi.binaan.indexBinaan', compact('paginate','title'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
