<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Residence;
use App\Model\Business;
use App\Model\Blotter;
use App\Model\Officials;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function index(){
        $latest_id= Officials::max('batch_id');
        $b_officials= Officials::where('batch_id',$latest_id)->get();

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

        $total_res = Residence::get()->count();
        $female_Cnt = Residence::where('gender' , 'female')->count();
        $male_Cnt = Residence::where('gender' , 'male')->count();   

        $total_business = Business::get()->count();
        $PWD_Cnt = Residence::where('pwd' , 'Yes')->count();
        $fourPs = Residence::where('membership_prog' , '4Ps')->count();
        $TUPAD_Cnt = Residence::where('membership_prog' , 'TUPAD')->count();

        $residence = Residence::all();
        $senior_Cnt = 0;
        $senior_pwd_Cnt = 0;
        $senior_notpwd_Cnt = 0;
        
        foreach($residence as $resident){
            if (\Carbon\Carbon::parse($resident->birthday)->diff(\Carbon\Carbon::now())->format('%y') >= 60){

                $senior_Cnt = $senior_Cnt +1;

                if($resident->pwd == 'No'){
                    $senior_notpwd_Cnt = $senior_notpwd_Cnt + 1;
                } 
                elseif($resident->pwd == 'Yes'){
                    $senior_pwd_Cnt = $senior_pwd_Cnt + 1;
                }
            }  
        }

        $blotters = Blotter::all();
        $total_blotters = 0;
        $unsettled_blotters = 0;
        $settled_blotters = 0;
        
        foreach($blotters as $blotter){
            $total_blotters = $total_blotters + 1;

            if( $blotter->status == 'Settled'){
                $settled_blotters = $settled_blotters + 1;
            }

            elseif ( $blotter->status == 'Unsettled'){
                $unsettled_blotters = $unsettled_blotters + 1;
            }
            
        }

        return view('dashboard.index', compact('b_cap','b_councelor1','b_councelor2','b_councelor3','b_councelor4','b_councelor5','b_councelor6' ,'b_councelor7', 'b_sk', 'b_sec' ,'b_tres', 'b_clerk',
         'total_res','female_Cnt','male_Cnt', 'total_business','PWD_Cnt', 'fourPs', 'TUPAD_Cnt', 'senior_Cnt','senior_pwd_Cnt','senior_notpwd_Cnt','total_blotters','unsettled_blotters','settled_blotters','b_officials'));
    }
}
