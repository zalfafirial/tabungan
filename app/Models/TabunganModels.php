<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabunganModel extends Model
{
    use HasFactory;

    protected $table = 'tabungan';
    protected $fillable = ['nis', 'nama', 'rayon', 'jumlah_uang'];
}
