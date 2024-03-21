<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = [
        'NIP', 'Nama', 'Tempat_Lahir', 'Alamat', 'Tanggal_Lahir', 'Jenis_Kelamin', 'Agama', 'No_HP', 'NPWP', 'foto',
    ];
}
