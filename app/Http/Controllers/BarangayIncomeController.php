<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Resident;
use App\Model\Officials;
use App\Model\ActivityLog;
use Illuminate\Support\Facades\Auth;

class BarangayIncomeController extends Controller
{
    public function create($id){
        $resident = Resident::findOrfail($id);  
        return view('brgy_certificate.income_certification.create',compact('resident')); 
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
                    'description' => 'Issue Brgy Income Certificate',
                    'subject' => 'Brgy Income',
                ]);
                
        return view('brgy_certificate.income_certification.show',compact('resident','purpose', 'b_officials')); 
    }
}
