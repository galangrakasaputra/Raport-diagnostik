<?php

namespace App\Imports;

use App\Models\kelas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

// Implements (Interface)
class KelasImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new kelas([
            'kode' => $row['kode'],
            'kelas' => $row['kelas'],
            'jurusan' => $row['jurusan'],
            'rombel' => $row['rombongan_belajar'],
        ]);
    }
}
