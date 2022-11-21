<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\PesanDetail;
use App\Models\Riwayat;

class DashboardController extends Controller
{
    public function index (){
        $produk = Produk::all()->count();
        $pesanan= PesanDetail::all()->count();
        $pendapatan = Riwayat::all()->sum('total');
        $title = 'Dashboard';
        return view('layouts.admin.dashboard', compact('produk','pesanan','pendapatan','title'));
    }
}
