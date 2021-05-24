<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputNilai extends Model
{
    protected $fillable = ['nama_siswa', 'kelas', 'mapel','nilai','keterangan','bukti',];
}
