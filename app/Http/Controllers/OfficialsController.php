<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Officials;

class OfficialsController extends Controller
{
    public function index(){

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
        return view('officials.index', compact('b_cap','b_councelor1','b_councelor2','b_councelor3','b_councelor4','b_councelor5','b_councelor6' ,'b_councelor7', 'b_sk', 'b_sec' , 'b_tres', 'b_clerk'));
    }

    public function edit(){

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
        
        return view('officials.edit', compact('b_cap','b_councelor1','b_councelor2','b_councelor3','b_councelor4','b_councelor5','b_councelor6' ,'b_councelor7', 'b_sk', 'b_sec' , 'b_tres', 'b_clerk'));
    }

    public function update(Request $request, $bcap_id, $bc1_id, $bc2_id, $bc3_id, $bc4_id, $bc5_id, $bc6_id, $bc7_id, $bsk_id, $bsec_id, $btres_id, $bclerk_id){
        
        $bcap = Officials::findOrfail($bcap_id);
        $bcap->brgy_official_name = $request->bcap;
        $bcap->save();

         $bc1= Officials::findOrfail($bc1_id);
         $bc1->brgy_official_name = $request->bc1_name;
         $bc1->brgy_official_role = $request->bc1_role;
         $bc1->save();

         $bc2= Officials::findOrfail($bc2_id);
         $bc2->brgy_official_name = $request->bc2_name;
         $bc2->brgy_official_role = $request->bc2_role;
         $bc2->save();

         $bc3= Officials::findOrfail($bc3_id);
         $bc3->brgy_official_name = $request->bc3_name;
         $bc3->brgy_official_role = $request->bc3_role;
         $bc3->save();

         $bc4= Officials::findOrfail($bc4_id);
         $bc4->brgy_official_name = $request->bc4_name;
         $bc4->brgy_official_role = $request->bc4_role;
         $bc4->save();

         $bc5= Officials::findOrfail($bc5_id);
         $bc5->brgy_official_name = $request->bc5_name;
         $bc5->brgy_official_role = $request->bc5_role;
         $bc5->save();

         $bc6= Officials::findOrfail($bc6_id);
         $bc6->brgy_official_name = $request->bc6_name;
         $bc6->brgy_official_role = $request->bc6_role;
         $bc6->save();

         $bc7= Officials::findOrfail($bc7_id);
         $bc7->brgy_official_name = $request->bc7_name;
         $bc7->brgy_official_role = $request->bc7_role;
         $bc7->save();

         $bsk= Officials::findOrfail($bsk_id);
         $bsk->brgy_official_name = $request->bsk_name;
         $bsk->brgy_official_role = $request->bsk_role;
         $bsk->save();

         $bsec= Officials::findOrfail($bsec_id);
         $bsec->brgy_official_name = $request->bsec_name;
         $bsec->save();

         $btres= Officials::findOrfail($btres_id);
         $btres->brgy_official_name = $request->btres_name;
         $btres->save();

         $bclerk= Officials::findOrfail($bclerk_id);
         $bclerk->brgy_official_name = $request->bclerk_name;
         $bclerk->save();
        

    }
}