<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\PesanDetail;
use App\Models\Pesan;
use DB;

class RekapPesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = PesanDetail::all(); 
        $pesan = DB::table('pesans')->get();
        $title = 'Data Pesanan';
        $paginate = PesanDetail::orderBy('id', 'asc')->paginate(3);
        return view('admin.pesan_kue.rekap.index', compact('data','pesan','title','paginate'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cari(Request $request)
    {
        $keyword = $request->cari; 
        $produk = Produk::where('nama',$keyword)->get('id');
        $data = PesanDetail::where('produk_id', 'like', '%' . $keyword . '%')->paginate(3);
        $data->appends(['keyword' => $produk]);
        $title = 'Pencarian Data Kue';
        $paginate = PesanDetail::orderBy('id', 'asc')->paginate(3);
        return view('admin.pesan_kue.rekap.index', compact('data','paginate','title'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
