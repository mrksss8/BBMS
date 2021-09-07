<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Residence;
use App\Model\Officials;

class BarangayLiveinController extends Controller
{
    public function create($id){
        $resident = Residence::findOrfail($id);  
        return view('brgy_certificate.livein_certification.create',compact('resident')); 
    }


    public function show($id, Request $request){
        // officials
        $b_cap = Officials::where('brgy_official_position','Barangay Chairman')->first();
        $b_councelor1 = Officials::where('brgy_official_position','Councilor 1')->first();
        $b_councelor2 = Officials::where('brgy_official_position','Councilor 2')->first();
        $b_councelor3 = Officials::where('brgy_official_position','Councilor 3')->first();
        $b_councelor4 = Officials::where('brgy_official_position','Councilor 4')->first();
        $b_councelor5 = Officials::where('brgy_official_position','Councilor 5')->first();
        $b_councelor6 = Officials::where('brgy_official_position','Councilor 6')->first();
        $b_councelor7 = Officials::where('brgy_official_position','Councilor 7')->first();
        $b_sk = Officials::where('brgy_official_position','SK Chairperson')->first();
        $b_sec = Officials::where('brgy_official_position','Barangay Secretary')->first();
        $b_tres = Officials::where('brgy_official_position','Barangay Treasurer')->first();
        $b_clerk = Officials::where('brgy_official_position','Barangay Clerk')->first();
        //

        $resident = Residence::findOrfail($id); 
        $purpose = $request->purpose;

        return view('brgy_certificate.livein_certification.show',compact('resident', 'purpose', 'b_cap','b_councelor1','b_councelor2','b_councelor3','b_councelor4','b_councelor5','b_councelor6' ,'b_councelor7', 'b_sk', 'b_sec' , 'b_tres', 'b_clerk')); 
    }
}
