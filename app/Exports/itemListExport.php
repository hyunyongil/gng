<?php

namespace App\Exports;

use App\Models\itemList;
use Maatwebsite\Excel\Concerns\FromCollection;

class itemListExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return itemList::all();
    }
}
