<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_acara',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
        'keterangan'
    ];
}
