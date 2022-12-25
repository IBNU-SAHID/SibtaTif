<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\pagination\paginator;

class riwayat_bimbingan extends Model
{
    use HasFactory;
    protected $table = 'riwayat_bimbingans';

    protected $fillable = ['nim', 'pembimbing_id', 'status', 'tanggal'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }

    public function dosens()
    {
        return $this->belongsTo(Dosen::class, 'nip', 'pembimbing_id');
    }
}
