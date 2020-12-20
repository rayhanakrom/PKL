<?php

namespace App\Imports;

use App\BUMN;
use Maatwebsite\Excel\Concerns\ToModel;

class BUMNImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new BUMN([
            'nama_karyawan' => $row['1'], 
            'nama_panggilan' => $row['2'], 
            'NIK' => $row['3'], 
            'bank' => $row['4'], 
            'no_rekening' => $row['5'], 
            'status_kartu' => $row['6'], 
            'keterangan' => $row['7'], 
        ]);
    }
}
