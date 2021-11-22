<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Residence;
use App\Model\Officials;

class BarangayIncomeController extends Controller
{
    public function create($id){
        $resident = Residence::findOrfail($id);  
        return view('brgy_certificate.income_certification.create',compact('resident')); 
    }


    public function show($id, Request $request){
         // officials
        $latest_id= Officials::max('batch_id');
        $b_officials= Officials::where('batch_id',$latest_id)->get();
        //
        $resident = Residence::findOrfail($id);  
        $purpose = $request->purpose;
        return view('brgy_certificate.income_certification.show',compact('resident','purpose', 'b_officials')); 
    }
}
