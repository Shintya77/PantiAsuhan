<?php

namespace App\Http\Controllers;

use App\Models\program;
use App\Models\binaan;
use App\Models\Bank;
use App\Models\donatur;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DonasiContrroler extends Controller
{
    //menampilkan Daftar Program
    public function program()
    {
        $data = program::all();
        $paginate = program::orderBy('id_program', 'asc')->paginate(5);
        return view('fitur.donasi.donasi', compact('data','paginate'));      
    }
    //Menampilkan Daftar Binaan
    public function binaan()
    {
        $data = binaan::all();
        $paginate = binaan::orderBy('id_binaan', 'asc')->paginate(10);
        return view('fitur.donasi.daftarbinaan', compact('data','paginate')); 
    }

    //Mengisi FORMULIR 
    public function donasi(){
        return view('fitur.donasi.donasi', 
        ['title'=> 'Donasi Panti Asuhan Putri Aisyiyah']);
    }

    public function formulir()
    {
        $program = program::all();
        $bank = Bank::all();
        $donatur = donatur::all();
        return view('fitur.donasi.formulir', compact('program','bank','donatur')); 
    }
    public function create()
    {
        $title ="Formulir Donasi Panti Asuhan";
        $donatur = donatur::all();
        return view('fitur.donasi.formulir', compact('title', 'donatur'));
    }
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
        ]);

        if ($request->file('bukti_tf')){
            $image_name = $request->file('bukti_tf')->store('bukti_tf', 'public');
        }
        $user =  new user();
        $user->id_pengguna = $request->id_pengguna;

        $bank = new bank();
        $bank->id_bank = $request->id_bank;

        $program = new program();
        $program->id_program = $request->id_program;

        $donatur = new donatur();
        $donatur->name = $request->name;
        $donatur->tgl_donasi = $request->tgl_donasi;
        $donatur->alamat = $request->alamat;
        $donatur->nominal = $request->nominal;
        $donatur->atas_nama = $request->atas_nama;
        $donatur->no_rekening = $request->no_rekening;
        $donatur->keterangan = $request->keterangan;
        $donatur->bukti_tf = $image_name;
        $donatur->status = $request->status;

        $donatur->user()->associate($user);
        $donatur->bank()->associate($bank);
        $donatur->program()->associate($program);
        $donatur->save();

        return view('fitur.donatur.donasi')->with('success', 'Donasi Akan Segera di Proses');
    }


}
