<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Business;
use App\Model\Residence;

class BusinessClearanceController extends Controller
{
    public function index(){
        $businesses = Business::with('residence')->get();
        return view('brgy_permit.business_clearance.index', compact('businesses'));
    }

    public function create_business(){
        $residence = Residence::all();
        return view('brgy_permit.business_clearance.create_business', compact('residence'));
    }

    public function store_business(Request $request){
            $business = new Business;     
            $business->business_owner_id = $request->business_owner;
            $business->business_name = $request->business_name;
            $business->business_address = $request->business_address;
            $business->save();        
    }
    public function show($id){

        $business = Business::with('residence')->findOrfail($id);  
        return view('brgy_permit.business_clearance.show',compact('business'));
}
}
