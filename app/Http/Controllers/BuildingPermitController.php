<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Building;
use App\Model\Officials;
use Carbon\Carbon;
use App\Model\ActivityLog;
use Illuminate\Support\Facades\Auth;

class BuildingPermitController extends Controller
{
    public function index(){

         $buildings = Building::orderBy('id','desc')->get();
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

        $year = Carbon::now()->year;  
        $building_cnt = Building::all()->count();

        $building_cnt =  $building_cnt + 1;    
        $building_number = $year . '- BAYOG -' . $building_cnt;



             $building = new Building;  
             $building->building_number = $building_number;
             $building->building_type = $request->building_type;
             $building->building_owner = $request->building_owner;
             $building->building_address = $request->building_address;
             $building->reg_date = $request->reg_date;
             $building ->save();        

           return redirect()->route('building_permit.index')->withStatus('Building Added Succesfully!');
    }
     public function show($id){
        $building  = Building::findOrfail($id);  
         return view('brgy_permit.building_permit.show',compact('building'));
}

    public function clearance($id){
        // officials
        $latest_id= Officials::max('batch_id');
        $b_officials= Officials::where('batch_id',$latest_id)->get();
        //

        ActivityLog::create([
            'user' => Auth::user()->name,
            'subject' => 'Brgy Building',
            'description' => 'Issue Brgy Building Clearance',
        ]);

        $building = Building::findorfail($id);
        return view('brgy_permit.building_permit.clearance',compact('building','b_officials')); 
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
