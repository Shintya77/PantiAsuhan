<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class DashboardController extends Controller
{
    public function index (){
        $produk = Produk::all()->count();
        $title = 'Dashboard';
        return view('layouts.admin.dashboard', compact('produk','title'));
    }
}
