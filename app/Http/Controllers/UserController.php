<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Hash;
use DB;

class UserController extends Controller
{
    private $user;
    private $role;
    public function __construct(User $user, Role $role){
        $this->user = $user ;
        $this->role = $role ;
    }
    public function index(){
        return view('admin.view_user');
    }
    public function create(){
        return view('admin.create_user');
    }

    public function edit(){
        return view('admin.edit_user');
    }

    public function detail(){
        return view('admin.detail_user');
    }
    public function ctv_profile(){
        return view('ctv.change_profile');
    }
    public function ctv_password(){
        return view('ctv.change_password');
    }

    public function admin_profile(){
        return view('admin.change_profile');
    }
    public function admin_password(){
        return view('admin.change_password');
    }
    public function manager_profile(){
        return view('manager.change_profile');
    }
    public function manager_password(){
        return view('manager.change_password');
    }


    public function dashboard_admin(){
        return view('admin.content');
    }
    public function dashboard_ctv(){
        return view('ctv.content');
    }
    public function dashboard_manager(){
        return view('manager.content');
    }




    public function stampoftime(){
        return view('admin.time_stamp');
    }
}
