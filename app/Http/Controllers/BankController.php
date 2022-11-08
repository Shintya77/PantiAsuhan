<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bank = Bank::all();
       
        return view ('admin.donasi.bank.indexBank', [
            'data' => $bank
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bank = new Bank;
        return view('admin.donasi.bank.tambah', compact('bank'));
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
            'nama_bank' => 'required',
            'nama_rekening' => 'required',
            'norekening' => 'required',
            'gambar' => 'required',
        ]);

        if ($request->file('gmbr_bank')){
            $image_name = $request->file('gmbr_bank')->store('gmbr_bank', 'public');
        }

        $bank = new Bank;
        $bank->nama_bank = $request->name;
        $bank->nama_rekening = $request->nama_rekening;
        $bank->norekening = $request->norekening;
        $bank->gambar = $image_name;
        $bank->save();

        return redirect()->route('bank.index')->with('success', 'Data Bank Berhasil Ditambahkan');
        

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
        $bank = Bank::find($id);
        return view('admin.donasi.bank.edit', compact('bank'));
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
        $bank = Bank::find($id);
        if ($bank->gmbr_bank && file_exists(storage_path('app/public/'.$bank->gmbr_bank))){
            \Storage::delete('public/'. $bank->fotgmbr_banko);
        }

        $image_name = $request->file('gmbr_bank')->store('gmbr_bank', 'public');

        $bank->nama_bank = $request->name;
        $bank->nama_rekening = $request->nama_rekening;
        $bank->norekening = $request->norekening;
        $bank->gambar = $image_name;
        $bank->save();

        return redirect()->route('bank.index')->with('success', 'Data Bank Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bank = Bank::find($id);
        $bank->delete();
        return redirect()->route('bank.index')->with('success', 'Data Bank Berhasil Dihapus');
 
    }
}
