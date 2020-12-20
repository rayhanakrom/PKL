<?php

namespace App\Imports;

use App\Monitoring;
use Maatwebsite\Excel\Concerns\ToModel;

class MonitoringImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Monitoring([
            'nama' => $row['1'],
            'NIK' => $row['2'],
            'detail_perihal' => $row['3'],
            'via_laporan' => $row['4'],
            'tanggal_lapor' => $row['5'],
            'penerima' => $row['6'],
            'kelengkapan' => $row['7'],
        ]);
    }
}
