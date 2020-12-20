<?php

namespace App\Imports;

use App\BPJS;
use Maatwebsite\Excel\Concerns\ToModel;

class BPJSImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new BPJS([
            'nama' => $row['1'],
            'NIK' => $row['2'],
            'divisi' => $row['3'],
            'keterangan' => $row['4']
        ]);
    }
}
