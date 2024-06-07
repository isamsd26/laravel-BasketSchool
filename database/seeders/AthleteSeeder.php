<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AthleteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ageGroups = ['SD', 'SMP', 'SMA'];

        for ($i = 0; $i < 100; $i++) {
            DB::table('athletes')->insert([
                'name' => Str::random(10),
                'age_group' => $ageGroups[array_rand($ageGroups)],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
