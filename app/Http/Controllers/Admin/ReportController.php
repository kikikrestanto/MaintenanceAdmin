<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\ReportExport;
use App\User;
use DB;
use App\Update;

class ReportController extends Controller
{
    public function index(Request $request)
    {

        // $report = \App\User::with(['post','update_tbl'])->get();
        $user = Auth::user();
        $report = \App\Post::with(['user','update_tbl'])->get();
        //$date = \App\Update::with(['user'])->get();
        return view('pages.admin.report.index',compact('user','report'));
    }
 
    public function export_excel()
    {
        return Excel::download(new ReportExport, 'Report.xlsx');
        //$report_data = DB::table('posts')->get()
          //  ->toArray();
        //$report_array = array('No','Nama Teknisi', 'Nama Inventaris')
    
        //nitip
        //dd::date->all();die();
        //$date = DB::table('posts')->join('updates','posts.id','=','updates.id')->get();
        
    }

    public function show($post_id)
    {
        $user = Auth::user();
        //$date = \App\Update::with(['user'])->get();
        //$date = DB::table('posts')->join('updates','posts.id','=','updates.id')->get();
        $date = \App\Update::with(['user','update_tbl'])->get();
       // dd($date);
        //$date = \App\Post::with(['user','update_tbl'])->get();
        //$date = Update::find($post_id);
       // $date = \App\Update::with(['user'])->get();
       //$data = \App\Update::with(['user'])->find($post_id); 
       //$date = Update::where('post_id', $request->post_id);
       //$date = Update::find($post_id);
       return view('pages.admin.report.detail', compact('user','date'));
    }
}
