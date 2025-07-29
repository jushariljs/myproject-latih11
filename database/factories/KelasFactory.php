<?php

namespace Database\Factories;

use Ramsey\Uuid\Uuid;
use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $guru_kelas_1 = User::all()->random();
        $sekolah = Sekolah::find($guru_kelas_1->sekolah_id);
        $guru_kelas_2 = User::where('sekolah_id', $guru_kelas_1->sekolah_id)->get()->random();

        return [
            'uuid' => Uuid::uuid4(),
            'nama_kelas' => fake()->word,
            'sekolah_id' => $sekolah->id, //rand(1, Sekolah::count()),
            'tahunting' => rand(1,6),
            'tahun' => rand(2022,2025), //fake->year,
            'guru_kelas1' => $guru_kelas_1->id,
            'guru_kelas2' => $guru_kelas_2->id,
        ];
    }
}
