<?php

namespace App\Exports;

use App\PKL;
use Maatwebsite\Excel\Concerns\FromCollection;

class PKLExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PKL::all();
    }
}
