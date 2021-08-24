<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profil_sekolah';
    protected $fillable = [
        'nama','npsn','status', 'bentuk', 'akreditasi','kurikulum','telepon','email','visi','misi','gambar', 'sejarah'
    ];
}
