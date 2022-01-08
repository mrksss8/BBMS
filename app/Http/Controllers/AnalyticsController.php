<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Resident;

class AnalyticsController extends Controller
{
    public function index(){

        $residence = Resident::all();

        //general analytics
        $senior_Cnt = 0;
        foreach($residence as $resident){
            if (\Carbon\Carbon::parse($resident->birthday)->diff(\Carbon\Carbon::now())->format('%y') >= 60){
                $senior_Cnt = $senior_Cnt + 1;
            }  
        }
        $std_Cnt = Resident::where('student', '!=', null)->count();
        $pwd_Cnt = Resident::where('PWD' ,'=', 'Yes')->count();
        $fourPs_Cnt = Resident::where('membership_prog' ,'=', '4Ps')->count();
        $tupad_Cnt = Resident::where('membership_prog' ,'=', 'TUPAD')->count();
        $MembershipProgram_None_Cnt = Resident::where('membership_prog' ,'=', 'None')->count();

            //Reisdent per purok
        $purok_1_Cnt = 0; $purok_2_Cnt = 0; $purok_3_Cnt = 0; $purok_4_Cnt = 0; $purok_5_Cnt = 0;          
            foreach($residence as $resident){
                if ($resident->purok == 1){
                    $purok_1_Cnt = $purok_1_Cnt + 1;
                }
                if ($resident->purok == 2){
                    $purok_2_Cnt = $purok_2_Cnt + 1;
                }
                if ($resident->purok == 3){
                    $purok_3_Cnt = $purok_3_Cnt + 1;
                }
                if ($resident->purok == 4){
                    $purok_4_Cnt = $purok_4_Cnt + 1;
                }
                if ($resident->purok == 5){
                    $purok_5_Cnt = $purok_5_Cnt + 1;
                }
            
        }

            //resident by Age
        $children_Cnt = 0; $teenage_Cnt = 0; $adult_Cnt = 0;
            foreach($residence as $resident){
                if ((\Carbon\Carbon::parse($resident->birthday)->diff(\Carbon\Carbon::now())->format('%y') >= 1) && (\Carbon\Carbon::parse($resident->birthday)->diff(\Carbon\Carbon::now())->format('%y') <= 12)){
                    $children_Cnt = $children_Cnt + 1;
                }

                elseif ((\Carbon\Carbon::parse($resident->birthday)->diff(\Carbon\Carbon::now())->format('%y') >= 13) && (\Carbon\Carbon::parse($resident->birthday)->diff(\Carbon\Carbon::now())->format('%y') <= 19)){
                    $teenage_Cnt = $teenage_Cnt + 1;
                }

                elseif ((\Carbon\Carbon::parse($resident->birthday)->diff(\Carbon\Carbon::now())->format('%y') >= 20) && (\Carbon\Carbon::parse($resident->birthday)->diff(\Carbon\Carbon::now())->format('%y') <= 59)){
                    $adult_Cnt = $adult_Cnt + 1;
                }
            //senior variable is declare at the top     
        }

            //senior by purok
        $purok1_senior_Cnt = 0; $purok2_senior_Cnt = 0; $purok3_senior_Cnt = 0; $purok4_senior_Cnt = 0; $purok5_senior_Cnt = 0;
            foreach($residence as $resident){
                if (((\Carbon\Carbon::parse($resident->birthday)->diff(\Carbon\Carbon::now())->format('%y') >= 60) && ($resident->purok ==  "1"))){
                    $purok1_senior_Cnt = $purok1_senior_Cnt + 1;
                }

                if (((\Carbon\Carbon::parse($resident->birthday)->diff(\Carbon\Carbon::now())->format('%y') >= 60) && ($resident->purok ==  "2"))){
                    $purok2_senior_Cnt = $purok2_senior_Cnt + 1;
                } 

                if (((\Carbon\Carbon::parse($resident->birthday)->diff(\Carbon\Carbon::now())->format('%y') >= 60) && ($resident->purok ==  "3"))){
                    $purok3_senior_Cnt = $purok3_senior_Cnt + 1;
                } 

                if (((\Carbon\Carbon::parse($resident->birthday)->diff(\Carbon\Carbon::now())->format('%y') >= 60) && ($resident->purok == "4"))){
                    $purok4_senior_Cnt = $purok4_senior_Cnt + 1;
                } 

                if (((\Carbon\Carbon::parse($resident->birthday)->diff(\Carbon\Carbon::now())->format('%y') >= 60) && ($resident->purok ==  "5"))){
                    $purok5_senior_Cnt = $purok5_senior_Cnt + 1;
                } 
            }

            //PWD per Purok
        $purok1_pwd_Cnt = Resident::where('PWD' ,'=', 'Yes')->where('purok',"=", "1")->count();
        $purok2_pwd_Cnt = Resident::where('PWD' ,'=', 'Yes')->where('purok',"=", "2")->count();
        $purok3_pwd_Cnt = Resident::where('PWD' ,'=', 'Yes')->where('purok',"=", "3")->count();
        $purok4_pwd_Cnt = Resident::where('PWD' ,'=', 'Yes')->where('purok',"=", "4")->count();
        $purok5_pwd_Cnt = Resident::where('PWD' ,'=', 'Yes')->where('purok',"=", "5")->count();

            //4ps per Purok
        $purok1_4ps_Cnt = Resident::where('membership_prog' ,'=', '4Ps')->where('purok',"=", "1")->count();
        $purok2_4ps_Cnt = Resident::where('membership_prog' ,'=', '4Ps')->where('purok',"=", "2")->count();
        $purok3_4ps_Cnt = Resident::where('membership_prog' ,'=', '4Ps')->where('purok',"=", "3")->count();
        $purok4_4ps_Cnt = Resident::where('membership_prog' ,'=', '4Ps')->where('purok',"=", "4")->count();
        $purok5_4ps_Cnt = Resident::where('membership_prog' ,'=', '4Ps')->where('purok',"=", "5")->count();
        
            //TUPAD per Purok
        $purok1_TUPAD_Cnt = Resident::where('membership_prog' ,'=', 'TUPAD')->where('purok',"=", "1")->count();
        $purok2_TUPAD_Cnt = Resident::where('membership_prog' ,'=', 'TUPAD')->where('purok',"=", "2")->count();
        $purok3_TUPAD_Cnt = Resident::where('membership_prog' ,'=', 'TUPAD')->where('purok',"=", "3")->count();
        $purok4_TUPAD_Cnt = Resident::where('membership_prog' ,'=', 'TUPAD')->where('purok',"=", "4")->count();
        $purok5_TUPAD_Cnt = Resident::where('membership_prog' ,'=', 'TUPAD')->where('purok',"=", "5")->count();

        //student per Purok
        $purok1_student_Cnt = Resident::where('student' ,'!=', 'N/A')->where('purok',"=", "1")->count();
        $purok2_student_Cnt = Resident::where('student' ,'!=', 'N/A')->where('purok',"=", "2")->count();
        $purok3_student_Cnt = Resident::where('student' ,'!=', 'N/A')->where('purok',"=", "3")->count();
        $purok4_student_Cnt = Resident::where('student' ,'!=', 'N/A')->where('purok',"=", "4")->count();
        $purok5_student_Cnt = Resident::where('student' ,'!=', 'N/A')->where('purok',"=", "5")->count();



        return view('analytics.index',compact('std_Cnt','senior_Cnt','pwd_Cnt','fourPs_Cnt','tupad_Cnt','MembershipProgram_None_Cnt',
        'purok_1_Cnt','purok_2_Cnt','purok_3_Cnt','purok_4_Cnt','purok_5_Cnt',
        'children_Cnt','teenage_Cnt','adult_Cnt',
        'purok1_senior_Cnt','purok2_senior_Cnt','purok3_senior_Cnt','purok4_senior_Cnt','purok5_senior_Cnt',
        'purok1_pwd_Cnt','purok2_pwd_Cnt','purok3_pwd_Cnt','purok4_pwd_Cnt','purok5_pwd_Cnt',
        'purok1_4ps_Cnt','purok2_4ps_Cnt','purok3_4ps_Cnt','purok4_4ps_Cnt','purok5_4ps_Cnt',
        'purok1_TUPAD_Cnt','purok2_TUPAD_Cnt','purok3_TUPAD_Cnt','purok4_TUPAD_Cnt','purok5_TUPAD_Cnt',
        'purok1_student_Cnt','purok2_student_Cnt','purok3_student_Cnt','purok4_student_Cnt','purok5_student_Cnt'
    ));
    }
}
