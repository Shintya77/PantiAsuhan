<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Http\Requests\StorePesanRequest;
use App\Http\Requests\UpdatePesanRequest;
use App\Models\Produk;
use App\Models\PesanDetail;

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
        $pesan = Pesan::where('user_id', auth()->user()->id)->first();
        $data = PesanDetail::where('pesan_id', $pesan->id)->get();
        $iniTanggal = PesanDetail::where('pesan_id', $pesan->id)->first();
        return view('fitur.pesan_kue.pesan', [
            'active'=>'active', 
            'title'=>'Keranjang',
            'data' => $data,
            'total' => PesanDetail::where('pesan_id', $pesan->id)->get()->sum('total'),
            'date' => $iniTanggal
        ]);
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
        
        Pesan::insert([
            'user_id' => auth()->user()->id,
        ]);
        $produk = Produk::find($request->produk_id);
        $pesan = Pesan::where('user_id', auth()->user()->id)->first();
        $detailPesan = PesanDetail::where('produk_id', $produk->id)->first();
        

        $addorder = [];
        if(empty($detailPesan)){
            $addorder = [
                'pesan_id' => $pesan->id,
                'produk_id' => $request->produk_id,
                'jumlah' => $request->jumlah_pesan,
                'total' => $produk->harga * $request->jumlah_pesan
                

            ];
            PesanDetail::create($addorder);
        
        }
        else{
            return redirect('/produk');
        }
        return redirect('/keranjang');
        
         

        

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
        return $request->all();
        // dd($request->all());
        $pesan = Pesan::where('user_id', Auth::user()->id)->first();
        $validateData = $request->validate([
            'bukti_pembayaran' => 'image|file',
        ]);
        $cek = $this->validate($request, [
            'bukti_pembayaran' => 'image|file',
        ]);
        // dd($cek);

        // dd($validateData);
       
        if ($request->file('bukti_pembayaran')) {
            $validateData['bukti_pembayaran'] = CloudinaryStorage::upload($request->file('bukti_pembayaran')->getRealPath(), $request->file('bukti_pembayaran')->getClientOriginalName());
        }
        // $order->status = 1;
        // dd($validateData);
        Order::where('user_id', Auth::user()->id)->update($validateData);
        return redirect('/cart')->with('success', 'Pembayaran berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pesanDetailId = PesanDetail::where('id', $id)->first();
        $pesan = Pesan::where('id', $pesanDetailId->pesan_id)->first();
        $pesanDetailId->delete();
        // $pesan->delete();

        return redirect('/keranjang');
    }
}
