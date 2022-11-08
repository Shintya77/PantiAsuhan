<?php

namespace App\Http\Controllers;

use App\Models\program;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DonasiContrroler extends Controller
{
    public function index()
    {
        $data = program::all();
        $paginate = program::orderBy('id_program', 'asc')->paginate(5);
        return view('fitur.donasi.donasi', compact('data','paginate'));
       
    }
}
