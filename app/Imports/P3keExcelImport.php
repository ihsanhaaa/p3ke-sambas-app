<?php

namespace App\Imports;

use App\Models\Individu;
use App\Models\Keluarga;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;

class P3keExcelImport implements ToCollection, WithStartRow
{
    public function startRow(): int
    {
        return 13; // Mulai membaca data dari baris ke-13
    }
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        // dd($rows);
        $currentKeluargaId = null;

        foreach ($rows as $row) {
            // Ambil data dari kolom B hingga M (kolom 13)
            $data = $row->slice(1, 13)->all();

            
            // Cek apakah ID Keluarga sama dengan ID yang sedang diolah
            if ($currentKeluargaId !== $data[4]) {
                // Jika tidak sama, artinya kita memiliki Keluarga baru
                $currentKeluargaId = $data[4];

                // Simpan data ke dalam tabel "KELUARGA"
                $keluarga = Keluarga::create([
                    'desa' => $data[2],
                    'alamat' => $data[3],
                    'id_keluarga' => $data[4],
                    'desil' => $data[6],
                    'tahun' => Carbon::now()->year,
                ]);

                Individu::create([
                    'keluarga_id' => $data[4],
                    'nama' => $data[7],
                    'nik' => $data[8],
                    'jenis_kelamin' => $data[10],
                    'hubungan_keluarga' => trim(explode('/', $data[11])[0]),
                    'tahun' => Carbon::now()->year,
                ]);

                // Simpan kepala keluarga sebagai anggota keluarga
                
            } else {
                // Jika ID Keluarga sama, artinya kita memiliki Anggota Keluarga
                Individu::create([
                    'keluarga_id' => $data[4],
                    'nama' => $data[7],
                    'nik' => $data[8],
                    'jenis_kelamin' => $data[10],
                    'hubungan_keluarga' => trim(explode('/', $data[11])[0]),
                    'tahun' => Carbon::now()->year,
                ]);
            }
        }
    }
}
