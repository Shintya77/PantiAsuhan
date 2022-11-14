<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
use Illuminate\Support\Facades\Storage;

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
        $title = 'Data Bank';
        $paginate = Bank::orderBy('id_bank', 'asc')->paginate(5);

        return view ('admin.donasi.bank.indexBank', compact('bank', 'title', 'paginate')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title ="Tambah Data Bank";
        $bank = Bank::all();
        return view('admin.donasi.bank.tambah', compact('title', 'bank'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        //melakukan validasi data
        $request->validate([
            'nama_bank' => 'required',
            'nama_rekening' => 'required',
            'norekening' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);

        if ($request->file('gmbr_bank')){
            $image_name = $request->file('gmbr_bank')->store('gmbr_bank', 'public');
        }

        $bank = new Bank;
        $bank->nama_bank = $request->nama_bank;
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
    public function edit($id_bank)
    {
        $title = 'Edit Data Bank';
        $bank = Bank::find($id_bank);
        return view('admin.donasi.bank.edit', compact('title', 'bank'));
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
        // dd($request -> all());
        ///melakukan validasi data
        $request->validate([
            'nama_bank' => 'required',
            'nama_rekening' => 'required',
            'norekening' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);

        $bank = Bank::where('id_bank',$id)->first();
        $bank->nama_bank = $request->get('nama_bank');
        $bank->nama_rekening = $request->get('nama_rekening');
        $bank->norekening = $request->get('norekening');
        if ($bank->gambar && file_exists(storage_path('app/public/'.$bank->gambar))){
            Storage::delete('public/'. $bank->gambar);
        }

        $image_name = $request->file('gambar')->store('images', 'public');
        $bank -> gambar = $image_name;
        $bank->save();
        
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('bank.index')
            ->with('success', 'Data Bank Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bank::where('id_bank',$id)->delete();
        return redirect()->route('bank.index')->with('success', 'Data Bank Berhasil Dihapus');
 
    }
    public function cari(Request $request)
    {
        $keyword = $request->cari;
        $paginate = Bank::where('nama_bank', 'like', '%' . $keyword . '%')->paginate(3);
        $paginate->appends(['keyword' => $keyword]);
        $title = 'Pencarian Data Bank';
        return view('admin.donasi.bank.indexBank', compact('paginate','title'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
