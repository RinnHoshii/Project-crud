<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiswadataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        \DB::table('siswa')->truncate();

        \DB::table('siswa')->insert([
            'jurusan' => "Rekayasa Perangkat Lunak",
            'nama' => "Muhammad Taufik Ramadhan",
            'NIS' => "12026319",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \DB::table('siswa')->insert([
            'jurusan' => "Rekayasa Perangkat Lunak",
            'nama' => " Mochamad Arfi Nouvama",
            'NIS' => "12026316",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \DB::table('siswa')->insert([
            'jurusan' => "Rekayasa Perangkat Lunak",
            'nama' => "Rezza Firmansyah",
            'NIS' => "12026251",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // for ($i=0; r
    }
}