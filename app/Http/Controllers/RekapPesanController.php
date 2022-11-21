<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\PesanDetail;
use App\Models\Riwayat;
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
        //menampilkan detail data pesanan berdasarkan Id siswa
        $pesanan = PesanDetail::where('id',$id)->first();
        $title = 'Data Rekapan Pesanan';
        return view('admin.pesan_kue.rekap.detail', compact('pesanan', 'title'));
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
         PesanDetail::where('id',$id)->delete();
         return redirect()->route('pesan.index')
         -> with('success', 'Pesanan Berhasil Dihapus');
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

    public function pendapatan(Request $request)
    {
        $tanggalAwal = date('Y-m-d', mktime(0, 0, 0, date('m'), 1, date('Y')));
        $tanggalAkhir = date('Y-m-d');

        $tanggalAwal = $request->tanggal_awal;
        $tanggalAkhir = $request->tanggal_akhir;

        $data = array();
        $total_transaksi = 0;
        $total_pendapatan = 0;

        
        $akhir = date('Y-m-d', strtotime("+1 day", strtotime($tanggalAkhir)));
        $rincian = Riwayat::whereBetween('created_at',[$tanggalAwal,$akhir])->get();

        while (strtotime($tanggalAwal) <= strtotime($tanggalAkhir)) {
            $tanggal = $tanggalAwal;
            $tanggalAwal = date('Y-m-d', strtotime("+1 day", strtotime($tanggalAwal)));

            $transaksi = Riwayat::where('created_at', 'LIKE', "%$tanggal%")->sum('pesan_id');
            $pendapatan = Riwayat::where('created_at', 'LIKE', "%$tanggal%")->sum('total');
            // $rincian = Riwayat::where('created_at', 'LIKE', "%$tanggal%")->get();

            $total_pendapatan += $pendapatan;
            $total_transaksi += $transaksi;

            $row = array();
            $row['tanggal'] = $tanggal;
            $row['transaksi'] = $total_transaksi;
            $row['pendapatan'] = $total_pendapatan;

            $data[] = $row;

        }

        // $data[] = [
        //     'tanggal' => '',
        //     'transaksi' => '',
        //     'pendapatan' => $total_pendapatan,
        // ];

        return view('admin.pesan_kue.rekap.laporan', compact('tanggalAwal', 'tanggalAkhir', 'transaksi', 'pendapatan', 'rincian'));
    }

    // public function getData($awal, $akhir)
    // {
    //     $no = 1;
    //     $data = array();
    //     $pendapatan = 0;
    //     $total_pendapatan = 0;

    //     while (strtotime($awal) <= strtotime($akhir)) {
    //         $tanggal = $awal;
    //         $awal = date('Y-m-d', strtotime("+1 day", strtotime($awal)));

    //         $total_transaksi = Riwayat::where('created_at', 'LIKE', "%$tanggal%")->sum('pesan_id');
    //         $pendapatan = Riwayat::where('created_at', 'LIKE', "%$tanggal%")->sum('total');


    //         $row = array();
    //         $row['DT_RowIndex'] = $no++;
    //         $row['tanggal'] = tanggal_indonesia($tanggal, false);
    //         $row['transaksi'] = format_number($transaksi);
    //         $row['pendapatan'] = format_uang($pendapatan);

    //         $data[] = $row;
    //     }

    //     $data[] = [
    //         'DT_RowIndex' => '',
    //         'tanggal' => '',
    //         'transaksi' => '',
    //         'pendapatan' => format_uang($pendapatan),
    //     ];

    //     return $data;
    // }

    // public function data($awal, $akhir)
    // {
    //     $data = $this->getData($awal, $akhir);

    //     return datatables()
    //         ->of($data)
    //         ->make(true);
    // }
}
