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
    public function dashboard(){
        return view('fitur.donasi.dashboard', 
        ['title'=> 'Donasi Panti Asuhan Putri Aisyiyah']);
    }
<<<<<<< HEAD
    public function formulir(){
        return view('fitur.donasi.formulir', 
        ['title'=> 'Formulir Donasi Panti Asuhan Putri Aisyiyah']);
    }
    public function binaan(){
        return view('fitur.donasi.daftarbinaan', 
        ['title'=> 'Daftar Binaan Panti Asuhan Putri Aisyiyah']);
    }

=======
    public function donasi(){
        return view('fitur.donasi.donasi', 
        ['title'=> 'Donasi Panti Asuhan Putri Aisyiyah']);
    }
>>>>>>> 2b526ce66b99d55e0d05faeaa2e61d20fae992db
}
