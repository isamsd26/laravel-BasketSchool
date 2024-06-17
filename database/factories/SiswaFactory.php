<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    protected $model = Siswa::class;

    public function definition()
    {
        $umur = $this->faker->numberBetween(9, 18);
        $kelompokUmur = ($umur <= 12) ? 'SD' : (($umur <= 15) ? 'SMP' : 'SMA');

        return [
            'nama_siswa' => $this->faker->name(),
            'kelompok_umur' => $kelompokUmur,
            'tanggal_registrasi' => $this->faker->date(),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'alamat' => $this->faker->address(),
            'telepon' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
