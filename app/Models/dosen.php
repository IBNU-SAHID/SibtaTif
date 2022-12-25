<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;
    protected $table = 'dosens';
    protected $primaryKey = 'nip';
    protected $fillable = [
        'nip',
        'nama',
        'jenisKelamin',
        'jurusan',
        'email',
        'telepon',
    ];

    public function mahasiswa()
    {
        return $this->belongsToMany(
            dosen::class,
            'bimbingans',
            'nim',
            'pembimbing_id'
        );
    }

    public function bimbingan()
    {
        return $this->hasMany(Bimbingan::class);
    }

    public function riwayat_bimbingan()
    {
        return $this->hasMany(riwayat_bimbingan::class);
    }
}
