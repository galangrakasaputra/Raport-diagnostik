<?php

namespace App\Imports;

use App\Models\guru;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GuruImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
          return new guru([
            'nip' => $row['nip'],
            'nama' => $row['nama'],
            'email' => $row['email'],
            'level' => $row['level'],
            'kode_mapel' => $row['kode_mapel'],
            'gender' => $row['gender'],
            'alamat' => $row['alamat'],
            'kecamatan' => $row['kecamatan'],
            'kota' => $row['kota'],
            'kodepos' => $row['kode_pos'],
            'username' => $row['username'],
            'password' => Hash::make($row['password'])
        ]);
    }
}
