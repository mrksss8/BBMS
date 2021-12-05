<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Resident;
use App\Model\Officials;

class BarangayLiveinController extends Controller
{
    public function create($id){
        $resident = Resident::findOrfail($id);  
        return view('brgy_certificate.livein_certification.create',compact('resident')); 
    }


    public function show($id, Request $request){
        // officials
        $latest_id= Officials::max('batch_id');
        $b_officials= Officials::where('batch_id',$latest_id)->get();
        //

        $resident = Resident::findOrfail($id); 

        $purpose = $request->purpose;
        $partner = $request->partner;
        $long = $request->long;

        return view('brgy_certificate.livein_certification.show',compact('resident', 'purpose','partner','long', 'b_officials')); 
    }
}
