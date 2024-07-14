<?php

namespace App\Imports;

use App\Models\mapel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MapelImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new mapel([
            'kode' => $row['kode'],
            'nama' => $row['nama'],
            'kelas' => $row['kelas'],
        ]);
    }
}
