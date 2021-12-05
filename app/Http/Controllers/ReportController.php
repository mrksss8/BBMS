<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Resident;
use App\Model\Blotter;

class ReportController extends Controller
{
    public function index(){

        $residence_list = Resident::all();
        return view('report.index',compact('residence_list'));
    }

    public function residents_report(){

        $residence_list = Resident::all();
        return view('report.residents_report.index',compact('residence_list'));
    }

    public function blotters_report(){
        $blotters = Blotter::all();
        return view('report.blotters_report.index',compact('blotters'));
    }
    
}
