<?php

namespace App\Exports;

use App\Monitoring;
use Maatwebsite\Excel\Concerns\FromCollection;

class MonitoringExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Monitoring::all();
    }
}
