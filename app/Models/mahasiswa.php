<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $primaryKey = 'nim';
    protected $fillable = [
        'nim',
        'nama',
        'jenisKelamin',
        'jurusan',
        'email',
        'telepon',
        'info_ta_id',
    ];

    public function info_ta()
    {
        return $this->belongsTo(info_ta::class);
    }

    public function dosen()
    {
        return $this->belongsToMany(
            dosen::class,
            'bimbingans',
            'nim',
            'pembimbing_id'
        );
    }

    public function riwayat_bimbingan()
    {
        return $this->hasMany(riwayat_bimbingan::class);
    }
}
