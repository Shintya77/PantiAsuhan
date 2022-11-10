<?php

namespace App\Http\Controllers;

use App\Models\donatur;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donatur = donatur::all();
        $title = 'Data Donatur';
        $paginate = donatur::orderBy('id_donatur', 'asc')->paginate(5);
        return view('admin.donasi.donatur.indexDonatur', compact('donatur','title','paginate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title ="Tambah Data Donatur";
        $donatur = donatur::all();
        return view('admin.donasi.donatur.tambah', compact('title', 'donatur'));
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
            'tgl_donasi' => 'required',
            'alamat' => 'required',
            'nominal' => 'required',
            'atas_nama' => 'required',
            'no_rekening' => 'required',
            'keterangan' => 'required',
            'bukti_tf' => 'image|file|max:1024',
            'status' => 'required',
        ]);

        if ($request->file('bukti_tf')){
            $image_name = $request->file('bukti_tf')->store('bukti_tf', 'public');
        }

        $donatur = new donatur();
        $donatur->id_pengguna = $request->id_pengguna;
        $donatur->id_bank = $request->id_bank;
        $donatur->id_program = $request->id_program;
        $donatur->name = $request->name;
        $donatur->tgl_donasi = $request->tgl_donasi;
        $donatur->alamat = $request->alamat;
        $donatur->nominal = $request->nominal;
        $donatur->atas_nama = $request->atas_nama;
        $donatur->no_rekening = $request->no_rekening;
        $donatur->keterangan = $request->keterangan;
        $donatur->bukti_tf = $image_name;
        $donatur->status = $request->status;
        $donatur->save();

        return redirect()->route('donatur.index')->with('success', 'Data Donatur Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\donatur  $donatur
     * @return \Illuminate\Http\Response
     */
    public function show(donatur $donatur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\donatur  $donatur
     * @return \Illuminate\Http\Response
     */
    public function edit($id_donatur)
    {
        $title = new donatur;
        $donatur = donatur::find($id_donatur);
        return view('admin.donasi.donatur.edit', compact('title', 'donatur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\donatur  $donatur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_donatur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\donatur  $donatur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        donatur::where('id_donatur',$id)->delete();
        return redirect()->route('donatur.index')->with('success', 'Data Donatur Berhasil Dihapus');
    }
}
