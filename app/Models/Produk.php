<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Harga;

class Produk extends Model
{
    use HasFactory;
    protected $table='produk';

    protected $fillable = [
        'nama',
        'gambar',
    ];

    public function harga(){
        return $this->hasMany(Harga::class);
    }
}
