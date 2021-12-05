<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Resident;
use App\Model\Blotter;
use App\Model\Officials;

class BarangayClearanceController extends Controller
{
    public function index(){

        
        $residence_list = Resident::all();
        return view('brgy_certificate.brgy_clearance.index',compact ('residence_list'));
    }


    public function create($id){
        $resident = Resident::findOrfail($id);
        $resident_with_blotter = Resident::with('blotters')->findOrfail($id); //where('status', '!=', 'Settled') in blotter table

        return view('brgy_certificate.brgy_clearance.create', compact('resident','resident_with_blotter')); 
    }


    public function show($id, Request $request){
         // officials
        $latest_id= Officials::max('batch_id');
        $b_officials= Officials::where('batch_id',$latest_id)->get();
        //

        $purpose = $request->purpose;
        $resident = Resident::findOrfail($id);  
        return view('brgy_certificate.brgy_clearance.show', compact('resident', 'purpose', 'b_officials')); 
    }

    
   
    
}
