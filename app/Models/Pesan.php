<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $table='pesans';

    public function bank(){
        return $this->belongsTo(Bank::class);
    }
    public function pesanDetail(){
        return $this->hasMany(PesanDetail::class);
    }
    public function riwayat(){
        return $this->hasMany(Riwayat::class);
    }
}
