<?php

namespace App\Exports;

use App\Angsuran;
use Maatwebsite\Excel\Concerns\FromCollection;

class AngsuranExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Angsuran::all();
    }
}
