<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
    protected $table = 'skripsis';

    protected $fillable = [
    	'judul',
        'deskripsi',
        'referensi',
        'file',
        'kategori'
    ];
}
