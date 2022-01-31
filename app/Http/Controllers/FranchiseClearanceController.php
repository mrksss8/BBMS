<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Franchise;
use App\Model\Officials;
use App\Model\Resident;
use Carbon\Carbon;
use App\Model\ActivityLog;
use Illuminate\Support\Facades\Auth;

class FranchiseClearanceController extends Controller
{
    public function index(){

      

        $franchises = Franchise::with('resident')->orderBy('id','desc')->get();

        

        return view('brgy_permit.franchise_clearance.index',compact('franchises'));
    }

    public function create(){
        $residents = Resident::all();

        return view('brgy_permit.franchise_clearance.create', compact('residents'));

    }

    public function store(Request $request){

        $year = Carbon::now()->year;  
        $franchise_cnt = Franchise::all()->count();

        $franchise_cnt =  $franchise_cnt + 1;    
        $franchise_number = $year . '-' . $franchise_cnt;

        $franchise = new Franchise;
        $franchise->franchisee_id = $request->resident;
        $franchise->franchise_number = $franchise_number;
        $franchise->chasis_number = $request->chasis_number;
        $franchise->motor_number = $request->motor_number;
        $franchise->plate_number = $request->plate_number;

        $franchise->save();        

        return redirect()->route('franchise_clearance.index')->withStatus('Franschise Added Succesfully!');
    }

    public function show($id){

        $franchise = Franchise::with('resident')->findorfail($id);

        return view('brgy_permit.franchise_clearance.show',compact('franchise'));

    }

    public function clearance($id){
        // officials
        $latest_id= Officials::max('batch_id');
        $b_officials= Officials::where('batch_id',$latest_id)->get();
        //

        $franchise  = Franchise::with('resident')->findorfail($id);
        
        ActivityLog::create([
            'user' => Auth::user()->name,
            'description' => 'Issue Brgy Franchise Clearance',
            'subject' => 'Brgy Franchise',
        ]);

        return view('brgy_permit.franchise_clearance.clearance',compact('franchise','b_officials')); 
    }
}
