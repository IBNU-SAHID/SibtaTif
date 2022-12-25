<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bimbingan extends Model
{
    use HasFactory;
    protected $table = 'bimbingans';
    protected $fillable = ['nim', 'pembimbing_id', 'status'];

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, 'nim', 'nim');
    }

    public function dosens()
    {
        return $this->hasMany(Dosen::class, 'nip', 'pembimbing_id');
    }

    public function pembimbing()
    {
        return $this->belongsTo(Dosen::class);
    }
}
