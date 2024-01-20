<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            ['jenis_program' => 'Pusat', 'nama' => 'PKH'],
            ['jenis_program' => 'Pusat', 'nama' => 'SEMBAKO'],
            ['jenis_program' => 'Pusat', 'nama' => 'PIP'],
            ['jenis_program' => 'Pusat', 'nama' => 'JKN-KIS'],
            ['jenis_program' => 'Pusat', 'nama' => 'BSPS'],
            ['jenis_program' => 'Pusat', 'nama' => 'BPNT'],
            ['jenis_program' => 'Pusat', 'nama' => 'BPUM'],
            ['jenis_program' => 'Pusat', 'nama' => 'BST'],
            ['jenis_program' => 'Pusat', 'nama' => 'PRAKERJA'],
            ['jenis_program' => 'Pusat', 'nama' => 'KUR'],
            ['jenis_program' => 'Pusat', 'nama' => 'SUBSIDI LISTRIK'],
            ['jenis_program' => 'Pusat', 'nama' => 'SUBSIDI LPG'],
            ['jenis_program' => 'Pusat', 'nama' => 'SUBSIDI PUPUK'],
            ['jenis_program' => 'Daerah', 'nama' => 'Dana Desa'],
            ['jenis_program' => 'Daerah', 'nama' => 'PBI Daerah'],
            ['jenis_program' => 'Daerah', 'nama' => 'BLT-DD'],
        ];

        DB::table('programs')->insert($programs);
    }
}
