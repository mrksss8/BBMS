<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Building;

class BuildingPermitController extends Controller
{
    public function index(){

         $buildings = Building::all();
        // $expired_business = 0;
        // foreach ($businesses as $businesse){
        //     $registration_date = \Carbon\Carbon::parse($businesse->regs_date)->diff(\Carbon\Carbon::now())->format('%y');
            
        //         if($registration_date > 1){
        //             $expired_business = $expired_business = 1;
        //         }
        // }

        return view('brgy_permit.building_permit.index',compact('buildings'));
    }

    public function create(){
        // $residence = Residence::all();
        return view('brgy_permit.building_permit.create');
    }

     public function store(Request $request){
             $building = new Building;     
             $building->building_owner = $request->building_owner;
             $building->building_address = $request->building_address;
             $building->reg_date = $request->reg_date;
             $building ->save();        

           return back();
    }
     public function show($id){
        $building  = Building::findOrfail($id);  
         return view('brgy_permit.building_permit.show',compact('building'));
}
     //public function create_clearance($id){
     //    return view('brgy_permit.business_clearance.clearance'); 
     //}


    // public function show_clearance($id){
    //     // officials
    //     $b_cap = Officials::where('brgy_official_position','Barangay Chairman')->first();
    //     $b_councelor1 = Officials::where('brgy_official_position','Councilor 1')->first();
    //     $b_councelor2 = Officials::where('brgy_official_position','Councilor 2')->first();
    //     $b_councelor3 = Officials::where('brgy_official_position','Councilor 3')->first();
    //     $b_councelor4 = Officials::where('brgy_official_position','Councilor 4')->first();
    //     $b_councelor5 = Officials::where('brgy_official_position','Councilor 5')->first();
    //     $b_councelor6 = Officials::where('brgy_official_position','Councilor 6')->first();
    //     $b_councelor7 = Officials::where('brgy_official_position','Councilor 7')->first();
    //     $b_sk = Officials::where('brgy_official_position','SK Chairperson')->first();
    //     $b_sec = Officials::where('brgy_official_position','Barangay Secretary')->first();
    //     $b_tres = Officials::where('brgy_official_position','Barangay Treasurer')->first();
    //     $b_clerk = Officials::where('brgy_official_position','Barangay Clerk')->first();
    //     //

    //     $business = Business::with('residence')->findOrfail($id);  
    //     return view('brgy_permit.business_clearance.clearance',compact('business', 'b_cap','b_councelor1','b_councelor2','b_councelor3','b_councelor4','b_councelor5','b_councelor6' ,'b_councelor7', 'b_sk', 'b_sec' , 'b_tres', 'b_clerk')); 
    // }
}
