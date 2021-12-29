<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Officials;

class OfficialsController extends Controller
{
    public function index(){

        $latest_id= Officials::max('batch_id');
        $b_officials= Officials::where('batch_id',$latest_id)->get();
        $b_officials_batch_ids = Officials::orderby('batch_id','Desc')->distinct()->get(['batch_id']);

        return view('officials.index', compact('b_officials','b_officials_batch_ids'));

       
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

    public function create(){
        return view('officials.create');
    }

    public function store(Request $request){


        $request->validate([
            'bcap_img','bc1_img','bc2_img','bc3_img','bc4_img','bc5_img','bc6_img','bc7_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);

        if ($request->file('bcap_img')) {
            $bcap_imagePath = $request->file('bcap_img');
            $bcap_imageName = $bcap_imagePath->getClientOriginalName();
            $bcap_path = $request->file('bcap_img')->storeAs('official', $bcap_imageName, 'public');
        }

        if ($request->file('bc1_img')) {
            $bc1_imagePath = $request->file('bc1_img');
            $bc1_imageName = $bc1_imagePath->getClientOriginalName();
            $bc1_path = $request->file('bc1_img')->storeAs('official', $bc1_imageName, 'public');
        }

        if ($request->file('bc2_img')) {
          $bc2_imagePath = $request->file('bc2_img');
          $bc2_imageName = $bc1_imagePath->getClientOriginalName();
          $bc2_path = $request->file('bc2_img')->storeAs('official', $bc2_imageName, 'public');
        }

        if ($request->file('bc3_img')) {
          $bc3_imagePath = $request->file('bc3_img');
          $bc3_imageName = $bc3_imagePath->getClientOriginalName();
          $bc3_path = $request->file('bc3_img')->storeAs('official', $bc3_imageName, 'public');
        }
        
        if ($request->file('bc4_img')) {
          $bc4_imagePath = $request->file('bc4_img');
          $bc4_imageName = $bc4_imagePath->getClientOriginalName();
          $bc4_path = $request->file('bc4_img')->storeAs('official', $bc4_imageName, 'public');
        }

        if ($request->file('bc5_img')) {
          $bc5_imagePath = $request->file('bc5_img');
          $bc5_imageName = $bc5_imagePath->getClientOriginalName();
          $bc5_path = $request->file('bc5_img')->storeAs('official', $bc5_imageName, 'public');
        }

        if ($request->file('bc6_img')) {
          $bc6_imagePath = $request->file('bc6_img');
          $bc6_imageName = $bc6_imagePath->getClientOriginalName();
          $bc6_path = $request->file('bc6_img')->storeAs('official', $bc6_imageName, 'public');
        }

        if ($request->file('bc7_img')) {
          $bc7_imagePath = $request->file('bc7_img');
          $bc7_imageName = $bc7_imagePath->getClientOriginalName();
          $bc7_path = $request->file('bc7_img')->storeAs('official', $bc7_imageName, 'public');
        }


          if ($request->file('bsk_img')) {
            $bsk_imagePath = $request->file('bsk_img');
            $bsk_imageName = $bsk_imagePath->getClientOriginalName();
            $bsk_path = $request->file('bsk_img')->storeAs('official', $bsk_imageName, 'public');
          }

          if ($request->file('bsec_img')) {
            $bsec_imagePath = $request->file('bsec_img');
            $bsec_imageName = $bsec_imagePath->getClientOriginalName();
            $bsec_path = $request->file('bsec_img')->storeAs('official', $bsec_imageName, 'public');
          }

          if ($request->file('btres_img')) {
            $btres_imagePath = $request->file('btres_img');
            $btres_imageName = $btres_imagePath->getClientOriginalName();
            $btres_path = $request->file('btres_img')->storeAs('official', $btres_imageName, 'public');
          }

          if ($request->file('bclerk_img')) {
            $bclerk_imagePath = $request->file('bclerk_img');
            $bclerk_imageName = $bclerk_imagePath->getClientOriginalName();
            $bclerk_path = $request->file('bclerk_img')->storeAs('official', $bclerk_imageName, 'public');
          }

        $batch_id = $request->batch_id;

        $officials = [
            ['brgy_official_name' => $request->bcap_name, 'brgy_official_position' => 'Barangay Chairman', 'brgy_official_role' =>'Barangay Chairman', 'path' =>'/storage/'.$bcap_path, 'img' => $bcap_imageName, 'batch_id' => $batch_id,],
            ['brgy_official_name' => $request->bc1_name, 'brgy_official_position' => 'Brgy Councelor 1', 'brgy_official_role' =>$request->bc1_role, 'path' =>'/storage/'.$bc1_path, 'img' => $bc1_imageName, 'batch_id' => $batch_id,],
            ['brgy_official_name' => $request->bc2_name, 'brgy_official_position' => 'Brgy Councelor 2', 'brgy_official_role' =>$request->bc2_role, 'path' =>'/storage/'.$bc2_path, 'img' => $bc2_imageName, 'batch_id' => $batch_id,],
            ['brgy_official_name' => $request->bc3_name, 'brgy_official_position' => 'Brgy Councelor 3', 'brgy_official_role' =>$request->bc3_role, 'path' =>'/storage/'.$bc3_path, 'img' => $bc3_imageName, 'batch_id' => $batch_id,],
            ['brgy_official_name' => $request->bc4_name, 'brgy_official_position' => 'Brgy Councelor 4', 'brgy_official_role' =>$request->bc4_role, 'path' =>'/storage/'.$bc4_path, 'img' => $bc4_imageName, 'batch_id' => $batch_id,],
            ['brgy_official_name' => $request->bc5_name, 'brgy_official_position' => 'Brgy Councelor 5', 'brgy_official_role' =>$request->bc5_role, 'path' =>'/storage/'.$bc5_path, 'img' => $bc5_imageName, 'batch_id' => $batch_id,],
            ['brgy_official_name' => $request->bc6_name, 'brgy_official_position' => 'Brgy Councelor 6', 'brgy_official_role' =>$request->bc6_role, 'path' =>'/storage/'.$bc6_path, 'img' => $bc6_imageName, 'batch_id' => $batch_id,],
            ['brgy_official_name' => $request->bc7_name, 'brgy_official_position' => 'Brgy Councelor 7', 'brgy_official_role' =>$request->bc7_role, 'path' =>'/storage/'.$bc7_path, 'img' => $bc7_imageName, 'batch_id' => $batch_id,],

            ['brgy_official_name' => $request->bsk_name, 'brgy_official_position' => 'SK Chairperson', 'brgy_official_role' =>$request->bsk_role, 'path' =>'/storage/'.$bsk_path, 'img' => $bsk_imageName, 'batch_id' => $batch_id,],
            ['brgy_official_name' => $request->bsec_name, 'brgy_official_position' => 'Brgy Secretary', 'brgy_official_role' =>'Brgy Secretary', 'path' =>'/storage/'.$bsec_path, 'img' => $bsec_imageName, 'batch_id' => $batch_id,],
            ['brgy_official_name' => $request->btres_name, 'brgy_official_position' => 'Brgy Treasurer', 'brgy_official_role' =>'Brgy Treasurer', 'path' =>'/storage/'.$btres_path, 'img' => $btres_imageName, 'batch_id' => $batch_id,],
            ['brgy_official_name' => $request->bclerk_name, 'brgy_official_position' => 'Brgy Clerk', 'brgy_official_role' =>'Brgy Clerk', 'path' =>'/storage/'.$bclerk_path, 'img' => $bclerk_imageName, 'batch_id' => $batch_id,],
          ];

        Officials::insert($officials);

        return redirect()->route('officials.index');

    }
}