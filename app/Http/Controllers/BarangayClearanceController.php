<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Residence;
use PDF;

class BarangayClearanceController extends Controller
{
    public function index(){
        $residence_list = Residence::all();
        return view('brgy_certificate.brgy_clearance.index',compact ('residence_list'));
    }


    public function create($id){
        $resident = Residence::findOrfail($id);  
        return view('brgy_certificate.brgy_clearance.create', compact('resident')); 
    }


    public function show($id, Request $request){
        $purpose = $request->purpose;
        $resident = Residence::findOrfail($id);  
        return view('brgy_certificate.brgy_clearance.show', compact('resident', 'purpose')); 
    }
   
    
}
