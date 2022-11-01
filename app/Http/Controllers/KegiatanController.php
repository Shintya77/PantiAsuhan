<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function kegiatan(){
        return view('fitur.user.profil.kegiatan', 
        ['title'=> 'Kegiatan Panti Asuhan Putri Aisyiyah']);
    }
    public function struktur(){
        return view('fitur.user.profil.struktur', 
        ['title'=> 'Struktu Kepengurusan Panti Asuhan Putri Aisyiyah']);
    }
}
