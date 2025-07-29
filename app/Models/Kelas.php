<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Sekolah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;
    // protected $primaryKey = 'kelas_id'; //<-- kalau nak set key id utama bdari table kelas

    protected $table = 'kelas';

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'sekolah_id', 'id');
    }

    public function geruKelas1()
    {
        return $this->belongsTo(Kelas::class, 'guru_kelas1', 'id');
    }

    public function geruKelas2()
    {
        return $this->belongsTo(Kelas::class, 'guru_kelas2', 'id');
    }

}
