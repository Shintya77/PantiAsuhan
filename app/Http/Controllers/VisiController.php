<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiController extends Controller
{
    public function visi(){
        return view('fitur.user.profil.visi', 
        ['title'=> 'Visi & Misi Panti Asuhan Putri Aisyiyah']);
    }
}