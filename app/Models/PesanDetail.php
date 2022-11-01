<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanDetail extends Model
{
    use HasFactory;
    protected $table='pesanandetail';

    public function harga(){
        return $this->belongsTo(Harga::class);
    }
}
