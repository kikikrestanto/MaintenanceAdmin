<?php

use App\Exports\ReportExport;
use Maatwebsite\Excel\Facades\Excel;
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

Route::get('/home', 'HomeController@index');


Route::prefix('admin')
    ->namespace('Admin')
    // ->middleware(['auth'])
    ->group(function(){
        Route::get('/','DashboardController@index')
            ->name('dashboard');
        Route::get('/login','LoginController@loginView');
        Route::post('/login','LoginController@login')->name('loginPost');
        //Route::resource('report', 'ReportController');
        
        Route::get('/report', 'ReportController@index')->name('reportIndex');
        Route::get('/report/show/{post_id}','ReportController@show')->name('reportShow');
        Route::get('/report/report_excel', 'ReportController@export_excel')->name('reportExcel');
        Route::resource('user', 'UserController');
        
    }); 

