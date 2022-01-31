<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Resident;
use App\Model\Officials;
use App\Model\ActivityLog;
use Illuminate\Support\Facades\Auth;

class BarangayIndigencyController extends Controller
{  
    public function create($id){
        $resident = Resident::findOrfail($id);  
        return view('brgy_certificate.indigency_certification.create',compact('resident')); 
    }


    public function show($id, Request $request){
         // officials
        $latest_id= Officials::max('batch_id');
        $b_officials= Officials::where('batch_id',$latest_id)->get();
        //

        $resident = Resident::findOrfail($id);  
        $purpose = $request->purpose;

        ActivityLog::create([
            'user' => Auth::user()->name,
            'description' => 'Issue Brgy Indigency Certificate',
            'subject' => 'Brgy Indigency',
        ]);


        return view('brgy_certificate.indigency_certification.show',compact('resident' , 'purpose', 'b_officials')); 
    }
}
