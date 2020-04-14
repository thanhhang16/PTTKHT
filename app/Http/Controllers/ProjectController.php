<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use DB;

class ProjectController extends Controller
{
    public function index(){
        return view('admin.view_project');
    }

    public function create(){
        return view('admin.create_project');
    }


    public function edit(){
       
        return view('admin.edit_project');

    }


}
