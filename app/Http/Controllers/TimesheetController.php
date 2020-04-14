<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Timesheet;
use DB;

class TimesheetController extends Controller
{
    public function index(){
        return view('ctv.view_timesheet');
    }

    public function create(){
        return view('ctv.add_timesheet');
    }
    public function edit(){

        return view('ctv.edit_timesheet');
    }
    public function approve(){

        return view('manager.approve_timesheet');
    }
    public function re_approve(){

        return view('manager.re_approve_timesheet');
    }
    public function manager_view(){

        return view('manager.manager_view_timesheet');
    }



    public function report_timesheet(){

        return view('admin.report_timesheet');
    }

}
