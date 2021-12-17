<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Fencing;
use Carbon\Carbon;

class FencingController extends Controller
{
    public function index(){

        $fencings = Fencing::all();

        return view('brgy_permit.fencing_permit.index',compact('fencings'));

    }

    public function create(){
        return view('brgy_permit.fencing_permit.create');
    }

    public function store(Request $request){

        $year = Carbon::now()->year;  
        $fencing_cnt = Fencing::all()->count();

        $fencing_cnt =  $fencing_cnt + 1;    
        $fencing_number = $year . '-' . $fencing_cnt;

        $fencing = new Fencing;
        $fencing->fencing_number = $fencing_number;
        $fencing->name = $request->name;
        $fencing->address =$request->address;
        $fencing->fencing_location = $request->fencing_location;
        $fencing->purpose = $request->purpose;
        

        $fencing->save();

        return redirect()->route('fencing_permit.index');

    }
    
}
