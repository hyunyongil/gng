<?php

namespace App\Http\Controllers;

use App\Exports\ItemExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ExcelDownload extends Controller
{
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function export()
    {
        return Excel::download(new ItemExport, 'itemList.xlsx');
    }
}
