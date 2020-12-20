<?php

namespace App\Imports;

use App\PKL;
use Maatwebsite\Excel\Concerns\ToModel;

class PKLImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PKL([
            'nama' => $row['1'],
            'NIM' => $row['2'],
            'email' => $row['3'],
            'asal' => $row['4'],
            'universitas' => $row['5'],
            'jurusan' => $row['6'],
            'no_telefon' => $row['7'],
            'Status' => $row['8'] 
        ]);
    }
}
