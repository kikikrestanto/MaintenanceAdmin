<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index(Request $request)
    {
        $user = Auth::user();
        $AC = \App\Post::where('jenisEdit','AC')->count();
        $mobil = \App\Post::where('jenisEdit','Mobil')->count();
        $genset = \App\Post::where('jenisEdit','Genset')->count();
        $fan = \App\Post::where('jenisEdit','Control Exhaust Fan')->count();
        $pompa = \App\Post::where('jenisEdit','Pompa')->count();
        $torn = \App\Post::where('jenisEdit','Torn')->count();
        $crystalMarmer = \App\Post::where('jenisEdit','Crystal Marmer')->count();
        $pembersihanGudang = \App\Post::where('jenisEdit','Pembersihan Gudang')->count();
        $pembersihanKolam = \App\Post::where('jenisEdit','Pembersihan Kolam')->count();
        $pembersihanSaluranAir = \App\Post::where('jenisEdit','Pembersihan Kolam Air')->count();
        $buffingLantai = \App\Post::where('jenisEdit','Buffing Lantai')->count();

        $account = DB::table('users')->count();
        $data = DB::table('posts')->count();
       // dd($request ->all());die();  
        return view('pages.admin.dashboard',compact('user','AC','mobil','genset', 'fan','pompa','torn','crystalMarmer', 'account', 'data','pembersihanGudang'
    ,'pembersihanKolam','pembersihanSaluranAir','buffingLantai'));
    }
}
