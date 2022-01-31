<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Digging;
use App\Model\Officials;
use Carbon\Carbon;
use App\Model\ActivityLog;
use Illuminate\Support\Facades\Auth;
class DiggingPermitController extends Controller
{
    public function index(){


        $diggings = Digging::orderBy('id','desc')->get();

        return view('brgy_permit.digging_permit.index',compact('diggings'));
    }

    public function create(){
        return view('brgy_permit.digging_permit.create');
    }

    public function store(Request $request){

        $year = Carbon::now()->year;  
        $digging_cnt = Digging::all()->count();

        $digging_cnt =  $digging_cnt + 1;    
        $digging_number = $year . '-' . $digging_cnt;

        $digging = new Digging;
        $digging->digging_number = $digging_number;
        $digging->name = $request->name;
        $digging->address =$request->address;
        $digging->digging_location = $request->digging_location;
        $digging->purpose = $request->purpose;
        

        $digging->save();

        return redirect()->route('digging_permit.index')->withStatus('Digging Added Succesfully!');

    }

    public function show($id){

        $digging = Digging::findorfail($id);
        return view('brgy_permit.digging_permit.show',compact('digging'));
    }

    
    public function clearance($id){
        // officials
        $latest_id= Officials::max('batch_id');
        $b_officials= Officials::where('batch_id',$latest_id)->get();
        //

        $digging = Digging::findorfail($id);


        ActivityLog::create([
            'user' => Auth::user()->name,
            'description' => 'Issue Brgy Digging Permit',
            'subject' => 'Brgy Digging',
        ]);

        return view('brgy_permit.digging_permit.clearance',compact('digging','b_officials')); 
    }
}
