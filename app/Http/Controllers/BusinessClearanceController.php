<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Business;
use App\Model\Residence;
use App\model\Officials;

class BusinessClearanceController extends Controller
{
    public function index(){

        $businesses = Business::with('residence')->get();
        $expired_business = 0;
        foreach ($businesses as $businesse){
            $registration_date = \Carbon\Carbon::parse($businesse->regs_date)->diff(\Carbon\Carbon::now())->format('%y');
            
                if($registration_date > 1){
                    $expired_business = $expired_business = 1;
                }
        }

        return view('brgy_permit.business_clearance.index', compact('businesses','expired_business'));
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
            $business->business_type = $request->business_type;
            $business->regs_date = $request->reg_date;
            $business->save();        

            return back();
    }
    public function show($id){

        $business = Business::with('residence')->findOrfail($id);  
        return view('brgy_permit.business_clearance.show',compact('business'));
        }

    public function create_clearance($id){
        return view('brgy_permit.business_clearance.clearance'); 
    }


    public function show_clearance($id){
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

        $business = Business::with('residence')->findOrfail($id);  
        return view('brgy_permit.business_clearance.clearance',compact('business', 'b_cap','b_councelor1','b_councelor2','b_councelor3','b_councelor4','b_councelor5','b_councelor6' ,'b_councelor7', 'b_sk', 'b_sec' , 'b_tres', 'b_clerk')); 
    }
}
