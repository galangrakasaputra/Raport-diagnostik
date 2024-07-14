<?php

namespace App\Imports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SiswaImport implements ToModel,WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
       return new Siswa([
            'nis' => $row['nis'],
            'nama' => $row['nama'],
            'kode_kelas' => $row['kode_kelas'],
            'email' => $row['email'],
            'gender' => $row['gender'],
            'alamat' => $row['alamat'],
            'tahun' => $row['tahun'],
            'kecamatan' => $row['kecamatan'],
            'kota' => $row['kota'],
            'kodepos' => $row['kodepos'],
            'username' => $row['username'],
            'password' => Hash::make($row['password'])
        ]);
    }
}
