<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;
use App\Models\PesanDetail;

class Harga extends Model
{
    use HasFactory;
    protected $table='harga';

    protected $fillable = [
        'produk_id',
        'harga_normal',
        'harga_tanggung',
        'harga_mini',
    ];

    public function produk(){
        return $this->belongsTo(Produk::class);
    }

    public function pesanDetail(){
        return $this->hasMany(PesanDetail::class);
    }
}
