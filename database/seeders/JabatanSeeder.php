<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jabatan;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Jabatan::insert([
            ['nama_jabatan' => 'Admin', 'gaji_pokok' => 7500000],
            ['nama_jabatan' => 'Manager', 'gaji_pokok' => 12000000],
            ['nama_jabatan' => 'Staff HRD', 'gaji_pokok' => 6500000],
            ['nama_jabatan' => 'Developer', 'gaji_pokok' => 9000000],
        ]);
    }
}
