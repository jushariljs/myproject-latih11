<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sekolah extends Model
{
    /** @use HasFactory<\Database\Factories\SekolahFactory> */
    use HasFactory;

    protected $table = 'sekolah';

    public function cikgu()
    {
        return $this->hasMany(User::class, 'sekolah_id', 'id');
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'sekolah_id', 'id');
    }
}
