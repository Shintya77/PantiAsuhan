<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Http\Requests\StorePesanRequest;
use App\Http\Requests\UpdatePesanRequest;
use App\Models\Harga;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        //
        $data = Harga::all();
        return view('fitur.pesan_kue.pesan', ['active'=>'active', 'title'=>'Keranjang'], compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePesanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePesanRequest $request)
    {
        dd($request->all());
        Pesan::insert([
            'user_id' => auth()->user()->id,
        ]);
        $harga = Harga::find($request->harga_id);
        $pesan = Pesan::where('user_id', auth()->user()->id)->first();
        $detailPesan = PesanDetail::where('pesan_id', $pesan->id)->first();

        $addorder = [];
        if(empty($detailPesan)){
            $addorder = [
                'pesan_id' => $pesan,
                'harga_id' => $request->harga_id,
                'jumlah' => $request->jumlah_pesan,
                'total_harga' => $harga->harga * $request->jumlah_pesan
                

            ];
            dd($addorder);
            PesananDetail::create($addorder);
        }
        
         

        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesan $pesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesan $pesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePesanRequest  $request
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePesanRequest $request, Pesan $pesan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesan $pesan)
    {
        //
    }
}
