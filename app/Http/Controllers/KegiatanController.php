<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function kegiatan(){
        return view('fitur.user.profil.kegiatan', 
        ['title'=> 'Kegiatan Panti Asuhan Putri Aisyiyah']);
    }
}
