<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class info_ta extends Model
{
    use HasFactory;
    protected $table = 'info_tas';
    protected $fillable = ['judul', 'deskripsi', 'jenis_ta'];

    public function mahasiswa()
    {
        return $this->hasMany(mahasiswa::class);
    }
}
