<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanDetail extends Model
{
    use HasFactory;
    protected $table='pesanandetail';
    protected $guarded = ['id'];

    public function produk(){
        return $this->belongsTo(Produk::class);
    }
}
