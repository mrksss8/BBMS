<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Resident;
use App\Model\Business;
use App\Model\Blotter;
use App\Model\Officials;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function index(){
        

        // officials
        $latest_id= Officials::max('batch_id');
        $b_officials= Officials::where('batch_id',$latest_id)->get();
        //

        $total_res = Resident::get()->count();
        $female_Cnt = Resident::where('gender' , 'female')->count();
        $male_Cnt = Resident::where('gender' , 'male')->count();   

        $total_business = Business::get()->count();
        $PWD_Cnt = Resident::where('pwd' , 'Yes')->count();
        $fourPs = Resident::where('membership_prog' , '4Ps')->count();
        $TUPAD_Cnt = Resident::where('membership_prog' , 'TUPAD')->count();

        $residence = Resident::all();
        $senior_Cnt = 0;
        $senior_pwd_Cnt = 0;
        $senior_notpwd_Cnt = 0;
        $senior_and_pwd_total_cnt = 0;

        $PWD_Cnt_two = 0;

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

            else{

                if($resident->pwd == 'Yes'){

                    $PWD_Cnt_two = $PWD_Cnt_two + 1;
                    
                } 
                
            }

            $senior_and_pwd_total_cnt =  $PWD_Cnt_two + $senior_Cnt;
           
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

        return view('dashboard.index', compact('total_res','female_Cnt','male_Cnt', 'total_business','PWD_Cnt', 'fourPs', 'TUPAD_Cnt', 'senior_Cnt','senior_pwd_Cnt','senior_notpwd_Cnt','senior_and_pwd_total_cnt','PWD_Cnt_two','total_blotters','unsettled_blotters','settled_blotters','b_officials'));
    }
}
