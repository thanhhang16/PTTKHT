<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        //dashboard
        Route::get('/', 'UserController@dashboard_admin')->name('admin.dashboard');

        //user controller
        //view_user
        Route::get('view/user', 'UserController@index')->name('admin.index.user');
        //create_user
        Route::get('create/user', 'UserController@create')->name('admin.create.user');
        Route::post('create/user', 'UserController@store')->name('admin.post.create.user');
        //edit_user
        Route::get('edit/user', 'UserController@edit')->name('admin.edit.user');
        Route::post('edit/user', 'UserController@update')->name('admin.post.update.user');
        //detail information
        Route::get('detail/user', 'UserController@detail')->name('admin.detail.user');
        //delete_user
        Route::get('delete/user', 'UserController@delete')->name('admin.delete.user');

        //project controller
        Route::get('view/project', 'ProjectController@index')->name('admin.index.project');
        //create_project
        Route::get('create/project', 'ProjectController@create')->name('admin.create.project');
        Route::post('create/project', 'ProjectController@store')->name('admin.post.create.project');
        //edit_project
        Route::get('edit/project', 'ProjectController@edit')->name('admin.edit.project');
        Route::post('edit/project', 'UserController@update')->name('admin.post.update.project');

        Route::get('report/project', 'TimesheetController@report_timesheet')->name('admin.report.timesheet');
        Route::get('profile', 'UserController@admin_profile')->name('admin.change.profile');
        Route::get('password', 'UserController@admin_password')->name('admin.change.password');




        Route::get('timestamp', 'UserController@stampoftime')->name('admin.change.timestamp');
    });



    Route::prefix('ctv')->group(function () {
        //dashboard
        Route::get('/', 'UserController@dashboard_ctv')->name('ctv.dashboard');
        Route::get('view', 'TimesheetController@index')->name('ctv.view.timesheet');
        Route::get('create/timesheet', 'TimesheetController@create')->name('ctv.create.timesheet');
        Route::get('edit/timesheet', 'TimesheetController@edit')->name('ctv.edit.timesheet');
        Route::get('profile', 'UserController@ctv_profile')->name('ctv.change.profile');
        Route::get('password', 'UserController@ctv_password')->name('ctv.change.password');






    });




});

Route::middleware(['auth'])->group(function () {
    Route::prefix('manager')->group(function () {
        Route::get('/', 'UserController@dashboard_manager')->name('manager.dashboard');
        Route::get('approve/timesheet', 'TimesheetController@approve')->name('manager.approve.timesheet');
        Route::get('change/approve', 'TimesheetController@re_approve')->name('manager.re_approve.timesheet');
        Route::get('view/timesheet', 'TimesheetController@manager_view')->name('manager.view.timesheet');
        Route::get('profile', 'UserController@manager_profile')->name('manager.change.profile');
        Route::get('password', 'UserController@manager_password')->name('manager.change.password');
    });
});