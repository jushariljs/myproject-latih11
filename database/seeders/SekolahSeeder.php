<?php

namespace Database\Seeders;

use App\Models\Sekolah;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sekolah::create([
            'uuid' => Uuid::uuid4(),
            'kod_sekolah' => 'K001',
            'nama_sekolah' => 'SK Satu',
            'alamat_sekolah' => 'Alamat 1',
            'poskod' => '12345',
            'negeri' => 'Sabah',
        ]);

        Sekolah::create([
            'uuid' => Uuid::uuid4(),
            'kod_sekolah' => 'K002',
            'nama_sekolah' => 'SK Dua',
            'alamat_sekolah' => 'Alamat 2',
            'poskod' => '12345',
            'negeri' => 'Sarawak',
        ]);
    }
}
