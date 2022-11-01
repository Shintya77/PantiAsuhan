<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    use HasFactory;
    protected $table='harga';

    public function produk(){
        return $this->belongsTo(Produk::class);
    }

    public function pesanDetail(){
        return $this->hasMany(PesanDetail::class);
    }
}
