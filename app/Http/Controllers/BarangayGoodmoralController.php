<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Resident;
use App\Model\Officials;

class BarangayGoodmoralController extends Controller
{
    public function create($id){
        $resident = Resident::findOrfail($id);  
        return view('brgy_certificate.goodmoral_certification.create',compact('resident')); 
    }


    public function show($id, Request $request){

        // officials
        $latest_id= Officials::max('batch_id');
        $b_officials= Officials::where('batch_id',$latest_id)->get();
        //

        $resident = Resident::findOrfail($id);  
        $purpose  = $request->purpose;
        return view('brgy_certificate.goodmoral_certification.show',compact('resident' ,'purpose', 'b_officials')); 
    }
}
