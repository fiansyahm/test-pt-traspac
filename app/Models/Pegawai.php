<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = [
        'NIP',
        'Nama',
        'Tempat_Lahir',
        'Alamat',
        'Tanggal_Lahir',
        'Jenis_Kelamin',
        'Agama',
        'No_HP',
        'NPWP',
        'jabatan_id',
        'unit_kerja_id',
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function unitKerja()
    {
        return $this->belongsTo(UnitKerja::class, 'unit_kerja_id');
    }
}
