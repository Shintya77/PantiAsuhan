<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = Pengguna::all();
        $title = 'Data Pengguna';
        $paginate = Pengguna::orderBy('id', 'asc')->paginate(10);
        return view('admin.pengguna.indexPengguna', compact('pengguna','title','paginate'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Data Pengguna';
        $pengguna = new Pengguna();
        return view('admin.pengguna.tambah', compact('title','pengguna'));
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
            'email' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'role' => 'required',
        ]);

        $pengguna = new Pengguna();
        $pengguna->name = $request->name;
        $pengguna->email = $request->email;
        $pengguna->password = $request->password;
        $pengguna->alamat = $request->alamat;
        $pengguna->nohp = $request->nohp;
        $pengguna->role = $request->role;
        $pengguna->save();

        return redirect()->route('pengguna.index')->with('success', 'Data Pengguna berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function show(Pengguna $id)
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
        $pengguna = Pengguna::find($id);
        $title = 'Edit Data Pengguna';
        return view('admin.pengguna.edit', compact('pengguna','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         //melakukan validasi data
         $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'role' => 'required',
        ]);

        $pengguna = new Pengguna();
        $pengguna->name = $request->name;
        $pengguna->email = $request->email;
        $pengguna->password = $request->password;
        $pengguna->alamat = $request->alamat;
        $pengguna->nohp = $request->nohp;
        $pengguna->role = $request->role;
        $pengguna->save();

        return redirect()->route('pengguna.index')->with('success', 'Data Pengguna Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengguna = Pengguna::find($id);
        $pengguna ->delete();
        return redirect()->route('pengguna.index')->with('success', 'Data Pengguna Berhasil Dihapus');
    }

    public function cari(Request $request)
    {
        $keyword = $request->cari;
        $paginate = Pengguna::where('name', 'like', '%' . $keyword . '%')->paginate(3);
        $paginate->appends(['keyword' => $keyword]);
        $title = 'Pencarian Data Pengguna';
        return view('admin.pengguna.indexPengguna', compact('paginate','title'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function ubahPengguna(Request $request,$id){
        dd($request -> all());
    }
}
