<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    use HasFactory;
    protected $table='programs';

    protected $fillable = [
        // 'id_program',
        'nama_program',
        'dns_butuh',
        'dns_terkumpul',
    ];
}
