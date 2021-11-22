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
        $latest_id= Officials::max('batch_id');
        $b_officials= Officials::where('batch_id',$latest_id)->get();
        //

        $business = Business::with('residence')->findOrfail($id);  
        return view('brgy_permit.business_clearance.clearance',compact('business', 'b_officials')); 
    }
}
