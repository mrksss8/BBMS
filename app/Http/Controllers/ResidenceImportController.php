<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ResidenceImport;
use App\Resident;

class ResidenceImportController extends Controller
{
    public function import(Request $request)
    {

        $file = $request->file('excelFile');

        $import = new ResidenceImport;
        $import -> import($file);

         if($import->failures()->isNotEmpty()){
             return back()->withFailures($import->failures());
         }


         return back()->withStatus('Excel file imported successfully');
     
       
         
    }
}
