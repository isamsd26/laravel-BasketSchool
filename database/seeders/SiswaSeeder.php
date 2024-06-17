<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; $i++) {
            // Generate random age between 9 and 18
            $umur = mt_rand(9, 18);

            DB::table('siswa')->insert([
                'nama_siswa' => 'Siswa ' . $i,
                'kelompok_umur' => $umur, // Assign random age to 'kelompok_umur'
                'tanggal_registrasi' => now(),
                'jenis_kelamin' => $i % 2 == 0 ? 'Laki-laki' : 'Perempuan',
                'alamat' => 'Alamat ' . $i,
                'telepon' => '08123456789' . $i,
                'email' => 'siswa' . $i . '@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
    public function filter($kelompok_umur)
    {
        if ($kelompok_umur == 'SD') {
            $siswa = Siswa::whereBetween('umur', [9, 12])->get();
        } elseif ($kelompok_umur == 'SMP') {
            $siswa = Siswa::whereBetween('umur', [13, 15])->get();
        } else {
            $siswa = Siswa::whereBetween('umur', [16, 18])->get();
        }

        return response()->json($siswa);
    }
}
