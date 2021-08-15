<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Residence;

class DashboardController extends Controller
{
    public function index(){

        $female_Cnt = Residence::where('gender' , 'female')->count();
        $male_Cnt = Residence::where('gender' , 'male')->count();

        return view('dashboard.index', compact('female_Cnt','male_Cnt'));
    }
}
