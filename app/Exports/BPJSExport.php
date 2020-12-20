<?php

namespace App\Exports;

use App\BPJS;
use Maatwebsite\Excel\Concerns\FromCollection;

class BPJSExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BPJS::all();
    }
}
