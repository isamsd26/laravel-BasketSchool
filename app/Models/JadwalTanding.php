<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalTanding extends Model
{
    use HasFactory;

    protected $table = 'jadwal_tanding';

    protected $fillable = [
        'hari_tanding',
        'tanggal_tanding',
        'nama_kompetisi',
        'logo_tim_a',
        'logo_tim_b',
    ];
}
