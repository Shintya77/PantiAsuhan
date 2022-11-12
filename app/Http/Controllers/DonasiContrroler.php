<?php

namespace App\Http\Controllers;

use App\Models\program;
use App\Models\binaan;
use App\Models\Bank;
use App\Models\donatur;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function form()
    {
        $program = program::all();
        $bank = Bank::all();
        $donatur = donatur::all();
        return view('fitur.donasi.formulir', compact('program','bank','donatur')); 
    }

    public function formulir(Request $request)
    {
        
        $data =  $request->validate([
            'id_bank' => 'required',
            'id_program' => 'required',
            'name' => 'required',
            'tgl_donasi' => 'required',
            'alamat' => 'required',
            'nominal' => 'required',
            'atas_nama' => 'required',
            'no_rekening' => 'required',
            'keterangan' => 'required',
            'bukti_tf' => 'image|file|max:1024',
        ]);
        $data['id_pengguna'] = Auth::user()->id;

        if ($request->file('bukti_tf')){
            $data['bukti_tf'] = $request->file('bukti_tf')->store('bukti_tf', 'public');
        }

        donatur::create($data);
        $program = program::all();
        $bank = Bank::all();
        $donatur = donatur::all();
        return view('fitur.donasi.dashboard')->with('success','Donasi anda diproses oleh pihak Panti'); 
    }

    //Riwayat
    public function riwayat()
    {

        $program = program::all();
        $bank = Bank::all();
        $donatur = donatur::all();
        return view('fitur.donasi.riwayat', compact('program','bank','donatur')); 
    }
   
}
