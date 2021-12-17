<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Digging;
use Carbon\Carbon;
class DiggingPermitController extends Controller
{
    public function index(){


        $diggings = Digging::all();

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

        return redirect()->route('digging_permit.index');

    }

    public function show($id){

        $digging = Digging::findorfail($id);
        return view('brgy_permit.digging_permit.show',compact('digging'));
    }
}
