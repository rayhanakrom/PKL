<?php

namespace App\Exports;

use App\BUMN;
use Maatwebsite\Excel\Concerns\FromCollection;

class BUMNExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BUMN::all();
    }
}
