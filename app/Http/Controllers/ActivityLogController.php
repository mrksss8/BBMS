<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ActivityLog;

class ActivityLogController extends Controller
{

    public function index(){

        $act_logs = ActivityLog::orderBy('created_at','desc')->get();
        return view('activity_logs.index',compact('act_logs'));
    }

}
