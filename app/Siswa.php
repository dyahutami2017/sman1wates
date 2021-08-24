<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;
class Siswa extends Model
{
    protected $guard = 'siswa';

    protected $table = 'siswa';
    protected $fillable = [
        'user_id','nama', 'email', 'kelas','jurusan',
    ];

}
