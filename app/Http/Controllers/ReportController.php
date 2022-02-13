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

        $blotters = Blotter::with('residents')->get();
        return view('report.blotters_report.index',compact('blotters'));
    }

    public function senior_citizen_report(){

        $residence_list = Resident::all();
        return view('report.senior_citizen_report.index',compact('residence_list'));
    }

    public function PWD_report(){
        $residence_list = Resident::all();
        return view('report.PWD_report.index',compact('residence_list'));
    }

    public function membership_program_report(){
        $residence_list = Resident::all();
        return view('report.membership_program_report.index',compact('residence_list'));
    }

    public function student_report(){
        $residence_list = Resident::where('student','!=','Other')->where('student','!=','N/A')->get();
        return view('report.student_report.index',compact('residence_list'));
    }

    public function residents_occupation_report(){

        $residence_list = Resident::all();
        return view('report.occupation_report.index',compact('residence_list'));
    }
    
}
