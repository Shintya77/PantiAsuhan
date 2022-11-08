<?php

namespace App\Http\Controllers;

use App\Models\program;
use App\Models\binaan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DonasiContrroler extends Controller
{
    public function program()
    {
        $data = program::all();
        $paginate = program::orderBy('id_program', 'asc')->paginate(5);
        return view('fitur.donasi.donasi', compact('data','paginate'));      
    }
    public function binaan()
    {
        $data = binaan::all();
        $paginate = binaan::orderBy('id_binaan', 'asc')->paginate(10);
        return view('fitur.donasi.daftarbinaan', compact('data','paginate')); 
    }
}
